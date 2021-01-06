<?php

class Profil extends controller
{
    public function sejarah()
    {
        $data['judul'] = 'Sejarah/Selayang Pandang';
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
            "t1" => "Pengujian kendaraan bermotor disebut juga uji kir adalah serangkaian kegiatan menguji dan/atau memeriksa bagian-bagian kendaraan bermotor, 
            kereta gandengan, kereta tempelan dan kendaraan khusus dalam rangka pemenuhan terhadap persyaratan teknis dan layak jalan.",
            "t2" => "Pelaksanaan Pengujian kendaraan bermotor di Unit PKB dan pemeriksaan dilakukan oleh Penguji yang memenuhi persyaratan yang ditetapkan oleh pemerintah, 
            bagi kendaraan yang memenuhi kelaikan akan disahkan oleh pejabat yang ditunjuk akan diberi tanda uji.",
            "p1" => "Membawa fotocopy STNK",
            "p2" => "Membawa fotocopy KTP pemilik/pengemudi",
            "p3" => "Membawa SRUT (Sertifikat Registrasi Uji Type) bagi kendaraan uji pertama",
            "p4" => "Membawa Rekomendasi numpang uji dari Dishub asal bagi kendaraan diluar wilayah Kabupaten Lamandau",
            "p5" => "Kendaraan yang akan diuji",
            "s1" => "Melakukan Pendaftaran pada Loket Pendaftaran a. Membawa fotocopy STNK b. Membawa fotocopy KTP pemilik/pengemudi c. Membawa SRUT (Sertifikat Registrasi Uji Type) bagi kendaraan uji pertama d. Membawa Rekomendasi numpang uji dari Dishub asal bagi kendaraan diluar wilayah Kabupaten Lamandau e. Kendaraan yang akan diuji",
            "s2" => "Melakukan Pra Uji a. Memeriksa kelengkapan kendaraan, menggesek nomor mesin dan nomor rangka b. Pemilik kendaraan beserta kendaraannya datang pada hari dan tanggal yang telah ditetapkan kemudian dilanjutkan dengan pelaksanaan pemeriksaan non mekanis / pra uji / uji visual c. Pemeriksaan identitas kendaraan, pemeriksaan bagian depan kendaraan, bagian samping kanan kendaraan, bagian belakang kendaraan, bagian samping kiri kendaraan dan dalam kendaraan",
            "s3" => "Kendaraan Memasuki Gedung Uji Setelah dilakukan pra uji, kendaraan masuk ke gedung uji unutk dilakukan pengujian dengan alat uji, antara lain : a. Smoke Testet atau CO/HC Tester yaitu untuk menguji ketebalan asap untuk mesin diesel dan kandungan CO/HC untuk mesin bensin b. Play Detector / Lorong Uji yaitu memeriksa komponen-komponen bagian bawah kendaraan yang sesuai dengan persyaratan taknis dan laik jalan c. Head Kight Tester yaitu untuk mengukur intensitas cahaya dan besarnya penyimpangan arah penyinaran lampu utama d. Side Slip Tester yaitu menguji sikap roda depan e. Axle Load yaitu untuk menimbang berat kosong kendaraan f. Brake Tester yaitu mrnguji besarnya gaya rem dan efisiensi rem g. Spedometer Tester yaitu menguji besarnya penyimpangan alat penunjuk kecepatan pada kendaraan",
            "s4" => "Penetapan Hasil Pengujian Kendaraan Bermotor Kendaraan yang telah selesai diuji, diparkir di tempat yang telah ditentukan dan berkas hasil uji beserta kartu induk diserahkan kepada penguji penyelia (penanda tangan buku uji) untuk ditentukan lulus atau tidak. Berkas hasil uji kendaraan yang telah dinyatakan lulus diserahkan kepada Bendahara Penerima untuk dibuatkan kwitansi retribusi biaya uji, tanda uji dan buku uji
            ",
            "s5" => "Penyerahan Buku Uji yang telah disahkan masa berlakunya Bila kendaraan dinyatakan lulus pemeriksaan secara nekanis maka dilanjutkan penandatanganan buku uji dan pemasangan tanda samping, apabila kendaraan tidak dinyatakan lulus uji mekanis maka harus dilakukan perbaikan terlebih dahulu, tenggang waktu perbaikan ditentukan oleh penguji berdasarkan tingkat kerusakan",
            "s6" => "Pemasangan tanda bukti lulus uji (stiker) Proses terakhir pemasangan tanda bukti lulus uji (stiker) kendaraan bermotor. Pelayanan pengujian kendaraan bermotor selesai dalam 1 hari, bila semua persyaratan dapat terpenuhi, ditandai dengan penyerahan semua dokumen kendaraan kepada pemilik kendaraan. Dokumen hasil pengujian untuk kepentingan arsip kantor, disimpan dalam file box sesuai jenis kendaraan dan data base yang ada dalam program komputer unit Pengujian Kendaraan Bermotor",
            "s7" => "Selesai Kendaraan yang sudah diuji dapat digunakan",
            "w1" => "60 Menit",
            "w2" => "Serangkaian kegiatan menguji dan/atau memeriksa bagian-bagian kendaraan bermotor, kereta gandengan, kereta tempelan dan kendaraan khusus dalam rangka pemenuhan terhadap persyaratan teknis dan laik jalan.",
            "b1" => "Rp. 15.000 = Formulir Pendaftaran",
            "b2" => "Rp. 85.000 = Buku Uji Baru",
            "b3" => "Rp. 15.000 = Plat Ujit",
            "b4" => "Rp. 15.000 = Stiker Samping",
            "b5" => "Rp. 50.000 = Biaya Uji untuk JBB < 3>",
            "b6" => "Rp. 75.000 = Biaya Uji untuk JBB > 3.500 Kg - 8.000 Kg",
            "b7" => "Rp. 100.000 = Biaya Uji untuk JBB ≥ 8.000 Kg ≤ 14.000 Kg",
            "b8" => "Rp. 150.000 = Biaya Uji untuk JBB ≥ 14.000 Kg",
            "j1" => "Jl. Sor GBLA, Rancabolang, Kec. Gedebage, Kota Bandung, Jawa Barat 40292",
            "j2" => "Hari : Senin - Jumat",
            "j3" => "Jam Operasional : 08.00 - 16.00 WIB",
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
