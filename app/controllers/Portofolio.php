<?php

Class Portofolio extends controller{
    public function index(){
        $data['judul'] = 'Dishub Bandung';
        $this->view('templates/beforeHeader', $data);
        $this->view('templates/header', $data);
        $this->view('portofolio/index', $data);
        $this->view('templates/footer', $data);
        $this->view('templates/afterFooter', $data);
    }

    public function portofolioDetails(){
        $data['judul'] = 'Dishub Bandung';
        $this->view('templates/beforeHeader', $data);
        $this->view('portofolio/portofolio-details', $data);
        $this->view('templates/afterFooter', $data);
    }
}