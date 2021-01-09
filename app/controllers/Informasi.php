<?php

Class Informasi extends controller{

    public function index($page){
        $data['judul'] = 'Informasi';
        $data['row'] = 3;
        $data['start'] = $page;
        //$data['page'] = 1;
        
        // $start = 1;
        
        // var_dump($data['start']);

        $data['informasi'] = $this->model('userModel')->getLimitAllDataInformasi($data['start'], $data['row']);
        $data['rowsInformasi'] = $this->model('userModel')->getAllDataInformasi();
        $total = $data['rowsInformasi']['itemCount'];
        $data['pages'] = ceil($total / $data['row']);
        $this->view('templates/beforeHeader', $data);
        $this->view('templates/header', $data);
        $this->view('informasi/index', $data,);
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

