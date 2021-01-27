<?php

Class Dokumentasi extends controller{
    public function index(){
        $data['judul'] = 'Dokumentasi';
        $data['dokumentasi'] = $this->model('userModel')->getAllDataDokumentasi();
        $this->view('templates/beforeHeader', $data);
        $this->view('templates/header', $data);
        $this->view('dokumentasi/index', $data);
        $this->view('templates/footer', $data);
        $this->view('templates/afterFooter', $data);
    }

    public function dokumentasiDetails($id){
        $data['judul'] = 'Detail Dokumentasi';
        $data['dokumentasi'] = $this->model('userModel')->getDokumentasiById($id);
        $data['fotoKegiatan'] = $this ->model('userModel')->getFotoKegiatanById($id);
        $this->view('templates/beforeHeader', $data);
        $this->view('dokumentasi/dokumentasi-details', $data);
        $this->view('templates/afterFooter', $data);
    }
}