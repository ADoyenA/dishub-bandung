<?php

Class Dokumentasi extends controller{
    public function index(){
        $data['judul'] = 'Dokumentasi';
        $this->view('templates/beforeHeader', $data);
        $this->view('templates/header', $data);
        $this->view('dokumentasi/index', $data);
        $this->view('templates/footer', $data);
        $this->view('templates/afterFooter', $data);
    }

    public function dokumentasiDetails(){
        $data['judul'] = 'Detail Dokumentasi';
        $this->view('templates/beforeHeader', $data);
        $this->view('dokumentasi/dokumentasi-details', $data);
        $this->view('templates/afterFooter', $data);
    }
}