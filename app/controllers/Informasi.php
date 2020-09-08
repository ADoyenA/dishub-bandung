<?php

Class Informasi extends controller{
    public function index(){
        $data['judul'] = 'Informasi';
        $data['informasi'] = $this->model('userModel')->getAllDataInformasi();
        $this->view('templates/beforeHeader', $data);
        $this->view('templates/header', $data);
        $this->view('informasi/index', $data);
        $this->view('templates/footer', $data);
        $this->view('templates/afterFooter', $data);
    }

    public function informasiSingle(){
        $data['judul'] = 'Detail Informasi';
        $this->view('templates/beforeHeader', $data);
        $this->view('templates/header', $data);
        $this->view('informasi/informasi-single', $data);
        $this->view('templates/footer', $data);
        $this->view('templates/afterFooter', $data);
    }

    public function detailInformasi($id)
    {
        $data['judul'] = 'Detail Informasi';
        $data['informasi'] = $this->model('userModel')->getInformasiById($id);
        $this->view('templates/beforeHeader', $data);
        $this->view('templates/header', $data);
        $this->view('informasi/detail-informasi', $data);
        $this->view('templates/footer', $data);
        $this->view('templates/afterFooter', $data);
    }
}

