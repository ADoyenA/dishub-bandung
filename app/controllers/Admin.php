<?php

class Admin extends Controller
{

    public function index()
    {
        $data['judul'] = 'Login Admin';
        $this->view('templates/beforeHeader', $data);
        $this->view('admin/index', $data);
        $this->view('templates/afterFooter', $data);
    }

    public function masuk()
    {
        if ($this->model('adminModel')->masukAdmin($_POST) > 0) {
            $username = $_POST["username"];
            $data['admin'] = $this->model('adminModel')->getAdminByUsername($username);
            $_SESSION['ID_admin'] = $data['admin']['ID_admin'];
            header('location: ' . BASEURL . '/admin/dashboard');
        } else {

            Pesan::setPesan('danger', 'Username dan Password Anda Salah');
            header('location: ' . BASEURL . '/admin');
        }
    }

    public function dashboard()
    {
        $data['judul'] = 'Dashboard Admin';
        $data['log'] = $this->model('adminModel')->getLog($_SESSION['ID_admin']);
        $this->view('templates/beforeHeader', $data);
        $this->view('templates/headerAdmin', $data);
        $this->view('admin/dashboard', $data);
        $this->view('templates/footerAdmin', $data);
        $this->view('templates/afterFooter', $data);
    }

    public function informasi()
    {
        $data['judul'] = 'Informasi Admin';
        // $data['row'] = 1000;
        // $data['start'] = 1;

        //$data['informasi'] = $this->model('adminModel')->getInformasi($data['start'], $data['row']);
        $data['informasi'] = $this->model('userModel')->getAllDataInformasi();
        //$total = $data['rowsInformasi']['itemCount'];
        // $data['pages'] = ceil($total / $data['row']);

        $data['informasiTerbaru'] = $this->model('adminModel')->getNewDataInformasi();
        $this->view('templates/beforeHeader', $data);
        $this->view('templates/headerAdmin', $data);
        $this->view('admin/informasi', $data);
        $this->view('templates/footerAdmin', $data);
        $this->view('templates/afterFooter', $data);
    }

    public function tambahInformasi()
    {
        $data['judul'] = 'Tambah Informasi';
        $this->view('templates/beforeHeader', $data);
        $this->view('admin/tambah-informasi', $data);
        $this->view('templates/afterFooter', $data);
    }

    public function createInformasi()
    {

        $nama_file = $_FILES['img']['name'];
        //$ukuran_file = $_FILES['img']['size'];
        //$tipe_file = $_FILES['img']['type'];
        $tmp_file = $_FILES['img']['tmp_name'];
        $path = "D:/xampp/htdocs/dishub-bandung/public/img/".$nama_file;

        if(move_uploaded_file($tmp_file, $path)){
            $this->model('adminModel')->createInformasi($_POST, $nama_file);
            echo "Berhasil Menambahkan Data";

            //contoh code log, tambahkan code ini pada proses yang benar
            $this->model('adminModel')->record("tambah", "Informasi",  date('Y-m-d'), $_POST);

  // header('location: ' . BASEURL . '/admin/dasboard'); 
        }else{
            echo "Maaf, gambar gagal untuk diupload.";
        }
    
    }




    public function dokumentasi()
    {
        $data['judul'] = 'Dokumentasi Admin';
        $data['dokumentasi'] = $this->model('userModel')->getAllDataDokumentasi();
        $data['dokumentasiTerbaru'] = $this->model('adminModel')->getNewDataDokumentasi();
        $this->view('templates/beforeHeader', $data);
        $this->view('templates/headerAdmin', $data);
        $this->view('admin/dokumentasi', $data);
        $this->view('templates/footerAdmin', $data);
        $this->view('templates/afterFooter', $data);
    }


    public function tambahDokumentasi()
    {
        $data['judul'] = 'Tambah Dokumentasi';
        $this->view('templates/beforeHeader', $data);
        $this->view('admin/tambah-dokumentasi', $data);
        $this->view('templates/afterFooter', $data);
    }

    public function createDokumentasi()
    {
        $nama_file1 = $_FILES['img_cover']['name'];
        $jumlah_file = count($_FILES['foto']['name']);
        $tmp_file1 = $_FILES['img_cover']['tmp_name'];
        $path1 = "D:/xampp/htdocs/dishub-bandung/public/img/".$nama_file1;

       
        if(move_uploaded_file($tmp_file1, $path1)){
            $this->model('adminModel')->createDokumentasi($_POST, $nama_file1);
            for($x=0; $x<$jumlah_file; $x++){
                $nama_file2 = $_FILES['foto']['name'][$x];
                $tmp_file2 = $_FILES['foto']['tmp_name'][$x];
                $path2 = "D:/xampp/htdocs/dishub-bandung/public/img/".$nama_file2;
                move_uploaded_file($tmp_file2, $path2);
           $this->model('adminModel')->record("tambah", "dokumentasi", date('Y-m-d'), $_POST);
           $Id_dokumentasi = $this->model('adminModel')->getIdDokumentasi($_POST);
            $this->model('adminModel')->createFotoKegiatan($Id_dokumentasi, $nama_file2);
            }
            echo "Berhasil Menambahkan Data";

        }else{
            echo "Maaf, gambar gagal untuk diupload.";
             }
    
    }

    public function editInformasi($id)
    {
        $data['judul'] = 'Edit Informasi';
        $data['informasi'] = $this->model('userModel')->getInformasiById($id);
        $this->view('templates/beforeHeader', $data);
        $this->view('admin/edit-informasi', $data);
        $this->view('templates/afterFooter', $data);
    }

    public function editDataInformasi()
    {
        $nama_file = $_FILES['img']['name'];
        //$ukuran_file = $_FILES['img']['size'];
        //$tipe_file = $_FILES['img']['type'];
        $tmp_file = $_FILES['img']['tmp_name'];
        $path = "D:/xampp/htdocs/dishub-bandung/public/img/".$nama_file;

        if(move_uploaded_file($tmp_file, $path)){
            $this->model('adminModel')->updateInformasi($_POST, $nama_file);
            echo "Berhasil Merubah Data";

            //contoh code log, tambahkan code ini pada proses yang benar
            $this->model('adminModel')->record("rubah", "Informasi",  date('Y-m-d'), $_POST);

           // header('location: ' . BASEURL . '/admin/dasboard'); 
 
        }else{
            echo "Maaf, gagal Merubah Data.";
        }

    }

    public function deleteInformasi($data,$nama_file)
    {
        if (unlink("D:/xampp/htdocs/dishub-bandung/public/img/".$nama_file)){
            $this->model('adminModel')->deleteInformasi($data);

            echo "Berhasil Menghapus Data";
            $this->model('adminModel')->record("hapus", "Informasi",  date('Y-m-d'), $_SESSION['ID_admin']);

        }else{
            echo "Gagal Menghapus Data";
        }

    }




    public function logout()
    {
        // remove all session variables
        session_unset();

        // destroy the session
        session_destroy();
        header('location: ' . BASEURL . '/admin');
    }
}

//Code untuk log aktivitas dimasukkan kedalam method, masukkan code ini kedalam proses yang benar
//$this->model('adminModel')->record("Menambahkan", "Informasi", date('Y-m-d') ,$_SESSION['ID_admin']);
//$this->model('adminModel')->record("Merubah", "Informasi", date('Y-m-d') ,$_SESSION['ID_admin']);
//$this->model('adminModel')->record("Menghapus", "Informasi", date('Y-m-d'), $_SESSION['ID_admin']);
//$this->model('adminModel')->record("Menambah", "Dokumentasi", date('Y-m-d'), $_SESSION['ID_admin']);
//$this->model('adminModel')->record("Merubah", "Dokumentasi", date('Y-m-d'), $_SESSION['ID_admin']);
//$this->model('adminModel')->record("Menghapus", "Dokumentasi", date('Y-m-d'), $_SESSION['ID_admin']);
