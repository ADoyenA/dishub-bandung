<?php

Class Contact extends controller{
    public function index(){
        $data['judul'] = 'Dishub Bandung';
        $this->view('templates/beforeHeader', $data);
        $this->view('templates/header', $data);
        $this->view('contact/index', $data);
        $this->view('templates/footer', $data);
        $this->view('templates/afterFooter', $data);
    }
}