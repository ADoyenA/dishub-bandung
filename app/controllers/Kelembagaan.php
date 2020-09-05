<?php

class Kelembagaan extends Controller{
    public function bidang(){
        $data['judul'] = 'Bidang-Bidang';
        $data['isi'] = 'Ini Halaman Bidang-Bidang';
        $this->view('templates/beforeHeader', $data);
        $this->view('templates/header', $data);
        $this->view('kelembagaan/bidang', $data);
        $this->view('templates/footer', $data);
        $this->view('templates/afterFooter', $data);
    }

    public function sekretariat(){
        $data['judul'] = 'Sekretariat';
        $data['isi'] = 'Ini Halaman Sekretariat';
        $this->view('templates/beforeHeader', $data);
        $this->view('templates/header', $data);
        $this->view('kelembagaan/sekretariat', $data);
        $this->view('templates/footer', $data);
        $this->view('templates/afterFooter', $data);
    }

    public function unit_pelaksana_teknis(){
        $data['judul'] = 'Unit Pelaksana Teknis';
        $data['isi'] = 'Ini Halaman Unit Pelaksana Teknis';
        $this->view('templates/beforeHeader', $data);
        $this->view('templates/header', $data);
        $this->view('kelembagaan/unit_pelaksana_teknis', $data);
        $this->view('templates/footer', $data);
        $this->view('templates/afterFooter', $data);
    }

    
}