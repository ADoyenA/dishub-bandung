<?php

class Profil extends controller
{
    public function sejarah()
    {
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

    public function struktur()
    {
        $data['judul'] = 'Struktur Organisasi';
        $this->view('templates/beforeHeader', $data);
        $this->view('templates/header', $data);
        $this->view('profil/struktur', $data);
        $this->view('templates/footer', $data);
        $this->view('templates/afterFooter', $data);
    }

    public function tupoksi()
    {
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

    public function profilPnjbt()
    {
        $data['judul'] = 'Profil Penjabat';
        $this->view('templates/beforeHeader', $data);
        $this->view('templates/header', $data);
        $this->view('profil/profilPnjbt', $data);
        $this->view('templates/footer', $data);
        $this->view('templates/afterFooter', $data);
    }

    public function maklumat()
    {
        $data['judul'] = 'Maklumat/Standar Pelayanan';
        $data['data'] = [
            "p1" => "Dinas Perhubungan Kota Bandung adalah unsur pelaksana urusan pemerintahan yang
            menyelenggarakan urusan pemerintahan yang menjadi kewenangan daerah di bidang perhubungan.",
            "p2" => "Dinas Perhubungan Kota Bandung dibentuk berdasarkan Perda Kota Bandung Nomor 5 Tahun 2001 
            tentang Pembentukan dan Susunan Organisasi Dinas Daerah di Lingkungan Pemerintah Kota Bandung.",
            "p3" => "Sebelum berubah menjadi Dinas Perhubungan, nomenklatur Dinas Perhubungan adalah sebagai berikut :",
            "s1" => "Dinas Lalu Lintas dan Angkutan Jalan Provinsi DT.I Jawa Barat Cabang Kotamadya DT.II Bandung sampai dengan Tahun 1997.",
            "s2" => "Dari Tahun 1997 sampai dengan Tahun 2001 dirubah menjadi Dinas Lalu Lintas dan Angkutan Jalan Kotamadya DT.II Bandung 
            berdasarkan Perda Kota Bandung Nomor 21 Tahun 1997 tanggal 1 April 1997 tentang Pembentukan Dinas Lalu Lintas dan Angkutan Jalan Kotamadya DT.II Bandung.",
            "s3" => "Dan sejak Tahun 2001 sampai dengan sekarang menjadi Dinas Perhubungan Kota Bandung",
            "v1" => "Terwujudnya sistem transportasi kota yang lebih baik untuk mendukung Kota Bandung sebagai kota yang unggul, nyaman, dan sejahtera",
            "m1" => "Menciptakan kondisi lalu lintas yang terkendali",
            "m2" => "Mewujudkan sarana angkutan umum yang aman",
            "m3" => "Menyediakan prasarana dan fasilitas perhubungan yang memadai",
            "m4" => "Meningkatkan kapasitas kinerja Dinas Perhubungan Kota Bandung",
            "d1" => "Peraturan Daerah (Perda) No.13 Tahun 2007 tentang Pembentukan dan Susunan Organisasi Dinas Daerah Kota Bandung.",
            "d2" => "Peraturan Daerah (Perda) No.16 Tahun 2012 tentang Penyelenggaraan Perhubungan dan Retribusi di Bidang Perhubungan.",
            "d3" => "Keputusan Wali Kota Bandung Tahun 2008 tentang Tugas Pokok dan Fungsi.",
            "d4" => "Keputusan Wali Kota Bandung Nomor 475 Tahun 2008 tentang Uraian Tugas Jabatan Struktural pada Dinas Daerah Kota Bandung.",
            "d5" => "Keputusan Wali Kota Bandung Nomor 1714 Tahun 2001 tentang Petunjuk Penyelenggaraan Perhubungan di Kota Bandung.",
            "d6" => "Keputusan Wali Kota Bandung Nomor 1230 Tahun 2001 tentang Petunjuk Teknis Pelaksanaan Pengujian Kendaraan Bermotor, 
            Penyelenggaraan Bengkel Umum, Tenaga Teknis Penguji, Penyelenggaraan Pendidikan Sekolah Mengemudi dan Kegiatan Bongkar Muat Barang di Kota Bandung.",
            "d7" => "Keputusan Wali Kota Bandung Nomor 551/Kep.140-Dishub/2012 tentang Penetapan Lokasi dan Posisi Parkir di 
            Tepi Jalan Umum dan Tempat Khusus Parkir di Kota Bandung.",
            "d8" => "Keputusan Wali Kota Bandung Nomor: 551/Kep.737-DisHub/2012 tentang Tim Koordinasi Kegiatan 
            Instensifikasi dan Ekstensifikasi Parkir Dalam Rangka Penertiban Parkir Di Tepi Jalan Umum dan Tempat Khusus Parkir Di Kota Bandung.",
            "d9" => "Keputusan Wali Kota Bandung Nomor: 551/Kep.764-DisHub/2012 tentang Pengoperasian Trans Metro 
            Bandung Pada Koridor 2 Cicaheum-Cibeureum Di Kota Bandung.",
            "d10" => "Peraturan Wali Kota Bandung Nomor: 163 Tahun 2012 tentang Harga Sewa Parkir dan 
            Petunjuk Teknis Pengelolaan Perparkiran di Gedung  dan Pelataran Parkir Di Kota Bandung.",
        ];
        $this->view('templates/beforeHeader', $data);
        $this->view('templates/header', $data);
        $this->view('profil/maklumat', $data);
        $this->view('templates/footer', $data);
        $this->view('templates/afterFooter', $data);
    }

    public function renstra()
    {
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
