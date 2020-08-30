<?php

Class Home extends controller{
    public function index(){
        $data['judul'] = 'Dishub Bandung';
        $this->view('templates/header', $data);
        $this->view('home/index', $data);
        $this->view('templates/footer', $data);
    }
}