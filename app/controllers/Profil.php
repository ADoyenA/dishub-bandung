<?php

Class Profil extends controller{
    public function sejarah(){
        $data['judul'] = 'Sejarah/Selayang Pandang';
        $data['data'] = [
            "title" => "DINAS PERHUBUNGAN PEMERINTAH KOTA BANDUNG",
            "p1" => "Dinas Perhubungan Kota Bandung adalah unsur pelaksana urusan pemerintahan yang
                    menyelenggarakan urusan pemerintahan yang menjadi kewenangan daerah di bidang perhubungan. 
                    Untuk melaksanakan tugas pokok tersebut, Dinas Perhubungan mempunyai fungsi:",
            "p2" => "a.Perumusan kebijakan lingkup Perhubungan;",
            "p3" => "b.Pelaksanaan kebijakan lingkup Perhubungan;",
            "p4" => "c.Pelaksanaan evaluasi dan pelaporan lingkup Perhubungan;",
            "p5" => "d.Pelaksanaan administrasi lingkup Dinas; dan",
            "p6" => "e.Pelaksanaan fungsi lain yang diberikan oleh Walikota terkait dengan tugas dan fungsinya.",
            "p7" => "Seiring dengan pertambahan jumlah penduduk Kota Bandung yang mana membutuhkan peningkatan pelayanan 
                    khususnya di bidang transportasi maka hal ini merupakan suatu tantangan dan sekaligus suatu peluang 
                    dalam pengembangan pelayanan transportasi baik bagi Dinas Perhubungan Kota Bandung maupun bagi stake holder 
                    lainnya. Tantangan yang paling menonjol adalah pemenuhan kebutuhan masyarakat akan pelayanan transportasi, 
                    baik untuk jarak dekat, menengah maupun jarak jauh. Untuk kebutuhan transportasi jarak dekat peluang ini 
                    sudah ditangkap dengan maraknya angkutan rakyat berupa sepeda motor ojek maupun becak. Untuk jarak menengah 
                    (dalam kota) nampaknya hal ini menjadi tantangan tersendiri bagi Dinas Perhubungan Kota Bandung mengingat 
                    banyaknya penumpang angkutan kota yang beralih menggunakan sepeda motor sehingga sedikit banyak mempengaruhi 
                    kelangsungan usaha jarak menengah ini. Sedangkan untuk pelayanan angkutan jarak jauh nampaknya ada pergeseran 
                    pemilihan moda angkutan khususnya untuk kelas menengah ke atas (kelas angkutan umum eksekutif) dari angkutan 
                    massal (bus dan kereta api) beralih kepada kendaraan yang lebih kecil (travel)."
        ];
        $this->view('templates/beforeHeader', $data);
        $this->view('templates/header', $data);
        $this->view('profil/sejarah', $data);
        $this->view('templates/footer', $data);
        $this->view('templates/afterFooter', $data);
    }

    public function struktur(){
        $data['judul'] = 'Struktur Organisasi';
        $this->view('templates/beforeHeader', $data);
        $this->view('templates/header', $data);
        $this->view('profil/struktur', $data);
        $this->view('templates/footer', $data);
        $this->view('templates/afterFooter', $data);
    }

    public function tupoksi(){
        $data['judul'] = 'Tupoksi';
        $data['data'] = [
            "title" => "TUGAS POKOK DAN FUNGSI",
            "p1" => "Tugas Dinas Perhubungan Bandung yaitu membantu Wali Kota Bandung dalam menyelenggarakan Urusan 
                    Pemerintahan yang menjadi kewenangan Daerah di Bidang Perhubungan.",
            "p2" => "Dinas Perhubungan Kota Bandung menjalankan fungsi sebagai berikut:",
            "p3" => "1. Perumusan kebijakan lingkup Perhubungan;",
            "p4" => "2. Pelaksanaan kebijakan lingkup Perhubungan;",
            "p5" => "3. Pelaksanaan evaluasi dan pelaporan lingkup Perhubungan;",
            "p6" => "4. Pelaksanaan administrasi lingkup Dinas; dan",
            "p7" => "5. Pelaksanaan fungsi lain yang diberikan oleh Walikota terkait dengan tugas dan fungsinya."
        ];
        $this->view('templates/beforeHeader', $data);
        $this->view('templates/header', $data);
        $this->view('profil/tupoksi', $data);
        $this->view('templates/footer', $data);
        $this->view('templates/afterFooter', $data);
    }

    public function profilPnjbt(){
        $data['judul'] = 'Profil Penjabat';
        $this->view('templates/beforeHeader', $data);
        $this->view('templates/header', $data);
        $this->view('profil/profilPnjbt', $data);
        $this->view('templates/footer', $data);
        $this->view('templates/afterFooter', $data);
    }

    public function maklumat(){
        $data['judul'] = 'Maklumat/Standar Pelayanan';
        $this->view('templates/beforeHeader', $data);
        $this->view('templates/header', $data);
        $this->view('profil/maklumat', $data);
        $this->view('templates/footer', $data);
        $this->view('templates/afterFooter', $data);
    }

    public function renstra(){
        $data['judul'] = 'RENSTRA/RENJA';
        $data['data'] = [
            "rs" => "RENCANA STRATEGIS DINAS PERHUBUNGAN KOTA BANDUNG",
            "rs1" => "Renstra merupakan komitmen Dinas Perhubungan Kota Bandung yang digunakan sebagai",
            "rs2" => "tolak ukur dan alat bantu bagi perumusan kebijakan penyelenggaraan",
            "rs3" => "pemerintahan khususnya dalam urusan pemerintahan bidang perhubungan Kota Bandung",
            "rk" => "RENCANA KERJA DINAS PERHUBUNGAN KOTA BANDUNG",
            "rk1" => "Rencana Kerja (Renja) Dinas Perhubungan Kota Bandung merupakan acuan",
            "rk2" => "pembangunan jangka pendek (Tahunan) yang merupakan turunan dari Rencana",
            "rk3" => "Strategis (Renstra) Dinas Perhubungan Kota Bandung untuk kemudian akan menjadi bahan Rencana Kerja"
        ];
        $this->view('templates/beforeHeader', $data);
        $this->view('templates/header', $data);
        $this->view('profil/renstra', $data);
        $this->view('templates/footer', $data);
        $this->view('templates/afterFooter', $data);
    }
}