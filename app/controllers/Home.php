<?php

class Home extends controller
{
    public function index()
    {
        $data['judul'] = 'Dishub Bandung';
        $data['data'] = [
            "title" => "DINAS PERHUBUNGAN KOTA BANDUNG",
            "h1" => "Dinas Perhubungan Kota Bandung adalah unsur pelaksana urusan pemerintahan yang 
            menyelenggarakan urusan pemerintahan yang menjadi kewenangan daerah di bidang perhubungan.",
            "h2" => "Untuk melaksanakan tugas pokok tersebut, Dinas Perhubungan mempunyai fungsi:",
            "hm1" => "Perumusan kebijakan lingkup Perhubungan",
            "hm2" => "Pelaksanaan kebijakan lingkup Perhubungan",
            "hm3" => "Pelaksanaan evaluasi dan pelaporan lingkup Perhubungan",
            "hm4" => "Pelaksanaan administrasi lingkup Dinas",
            "hm5" => "Pelaksanaan fungsi lain yang diberikan oleh Walikota terkait dengan tugas dan fungsinya",
        ];
        $this->view('templates/beforeHeader', $data);
        $this->view('templates/header', $data);
        $this->view('home/index', $data);
        $this->view('templates/footer', $data);
        $this->view('templates/afterFooter', $data);
    }
}
