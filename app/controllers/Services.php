<?php

Class Services extends controller{
    public function index(){
        $data['judul'] = 'Dishub Bandung';
        $this->view('templates/beforeHeader', $data);
        $this->view('templates/header', $data);
        $this->view('services/index', $data);
        $this->view('templates/footer', $data);
        $this->view('templates/afterFooter', $data);
    }
}