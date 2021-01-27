<?php

Class Blog extends controller{
    public function index(){
        $data['judul'] = 'Dishub Bandung';
        $this->view('templates/beforeHeader', $data);
        $this->view('templates/header', $data);
        $this->view('blog/index', $data);
        $this->view('templates/footer', $data);
        $this->view('templates/afterFooter', $data);
    }

    public function blogSingle(){
        $data['judul'] = 'Dishub Bandung';
        $this->view('templates/beforeHeader', $data);
        $this->view('templates/header', $data);
        $this->view('blog/blog-single', $data);
        $this->view('templates/footer', $data);
        $this->view('templates/afterFooter', $data);
    }
}

