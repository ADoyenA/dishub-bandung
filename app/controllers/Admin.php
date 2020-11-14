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
            $data['username'] = $_POST["username"];
            //$data['admin'] = $this->model('adminModel')->getAdminByUsername($username);
            header('location: ' . BASEURL . '/admin/dashboard'); 
           
        }else {
            
            Pesan::setPesan('danger', 'Email dan Password Anda Salah');
            header('location: ' . BASEURL . '/admin'); 
            
        }
    }

    public function dashboard()
    {
        $data['judul'] = 'Dashboard Admin';
        $this->view('templates/beforeHeader', $data);
        $this->view('templates/headerAdmin', $data);
        $this->view('admin/dashboard', $data);
        $this->view('templates/footerAdmin', $data);
        $this->view('templates/afterFooter', $data);
    }

    public function informasi()
    {
        $data['judul'] = 'Informasi Admin';
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

    public function dokumentasi()
    {
        $data['judul'] = 'Dokumentasi Admin';
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