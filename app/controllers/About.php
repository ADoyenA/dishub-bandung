<?php

Class About extends controller{
    public function index(){
        $data['judul'] = 'Dishub Bandung';
        $this->view('templates/beforeHeader', $data);
        $this->view('templates/header', $data);
        $this->view('about/index', $data);
        $this->view('templates/footer', $data);
        $this->view('templates/afterFooter', $data);
    }
}