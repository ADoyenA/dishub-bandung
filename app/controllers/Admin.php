<?php

class Admin extends Controller {

    public function index()
    {
        $data['judul'] = 'Login Admin';
        $this->view('templates/beforeHeader', $data);
        $this->view('admin/index', $data);
        $this->view('templates/afterFooter', $data);
    }

    public function masuk()
    {
        if ($this->model('adminModel')->masukAdmin($_POST) > 0) 
        { 
            $username = $_POST["username"];
            $data['admin'] = $this->model('adminModel')->getAdminByUsername($username);
            $_SESSION['ID_admin'] = $data['admin']['ID_admin'];
            header('location: ' . BASEURL . '/admin/dasboard');
           
        }else {
            
            Pesan::setPesan('danger', 'Email dan Password Anda Salah');
            header('location: ' . BASEURL . '/admin'); 
            
        }
    }

    public function dasboard()
    {
        $data['judul'] = 'Dasboard Admin';
        $this->view('templates/beforeHeader', $data);
        $this->view('admin/dasboard', $data);
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
        if ($this->model('adminModel')->createInformasi($_POST) != ""){
            echo "Berhasil Menambahkan Data";
           // header('location: ' . BASEURL . '/admin/dasboard'); 
        }else {
            echo "Gagal Memasukan Data";
        }
    }


}