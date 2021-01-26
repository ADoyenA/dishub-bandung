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
        if ($this->model('adminModel')->createInformasi($_POST) != "") {
            echo "Berhasil Menambahkan Data";

            //contoh code log, tambahkan code ini pada proses yang benar
            $this->model('adminModel')->record("tambah", "Informasi",  date('Y-m-d'), $_POST);

            // header('location: ' . BASEURL . '/admin/dasboard'); 
        } else {
            //contoh code log, tambahkan code ini pada proses yang benar
            $this->model('adminModel')->record("tambah", "informasi", date('Y-m-d'), $_POST);

            echo "Gagal Memasukan Data";
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
