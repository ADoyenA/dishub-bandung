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
            "bb1" => "Bandros yang merupakan kepanjangan dari Bandung Tour on The Bus adalah bus wisata di Kota Bandung yang disediakan oleh pemerintah Kota Bandung bagi wisatawan yang hendak berkeliling kota Bandung. Bus ini diresmikan oleh Wali kota Bandung Ridwan Kamil bertepatan dengan malam tahun baru 2014 dan 18 Febuari 2018. 
            Bus wisata ini akan melayani para wisatawan di kota Bandung.",
            "bb2" => "Bandros dikelola oleh dua pihak yaitu dari Dinas Perhubungan Kota Bandung dan Mang Dudung yang merupakan bentuk Corporate Social Responsibility. 
            Bus Bandros berkapasitas kurang lebih dari 25 orang. Bus Bandros yang dimiliki Kota Bandung baru 18 unit. Ada enam dari bantuan perusahaan (CSR), dan 12 dari APBD yang dikelola oleh BLUD UPT Angkutan Dinas Perhubungan Kota Bandung.",
            "bs1" => "Keberadaan Bandros sebagai bus wisata yang bertingkat diawali dengan rencana dari Wali kota Bandung Ridwan Kamil ketika dirinya baru terpilih menjadi Wali kota pada tahun 2013 lalu untuk meningkatkan sektor pariwisata, yang menjadi salah satu andalan dan penggerak roda ekonomi Kota Bandung. 
            Rencananya, bus itu akan berada di setiap hotel guna mengantar para wisatawan ke tempat-tempat wisata yang ada di kota Bandung dan sekitarnya[3] Selain mengantar para wisatawan ke tempat-tempat wisata yang ada di Bandung, bus wisata yang dirancang dengan nyaman dan menarik ini diharapkan bisa mengurangi penggunaan mobil pribadi sehingga bisa mengurangi kemacetan yang terjadi di kota Bandung",
            "bs2" => "Rencana ini kemudian mendapat sambutan dari Telkomsel yang bersedia mendanai unit-unit pertama dari bus wisata di Kota Bandung melalui program Corporate Social Responsibility. Selain itu, Pemerintah Kota Bandung juga mengadakan sayembara terbuka untuk memberi nama bus wisata tersebut melalui jejaring sosial Twitter. 
            Sayembara ini dimenangkan oleh Erry Pamungkas yang memberi nama bus wisata ini Bandros, singkatan dari Bandung Tour on The Bus. Nama Bandros sendiri berasal dari nama salah satu makanan khas Parahyangan, sehingga dengan nama ini semakin membuat bus wisata di Kota Bandung menarik. Akhirnya pada tanggal 31 Desember 2013, bertepatan dengan malam tahun baru 2014, Wali kota Ridwan Kamil resmi meluncurkan bus wisata Bandros",
            "br1" => "Rute Biru akan berkeliling dari Alun-alun Bandung, menuju Cibaduyut, Taman Leuwi Panjang, Museum Sri Baduga, Alun-alun Regol, Kawasan Buah Batu dan kembali ke Alun Alun.",
            "br2" => "Rute Kuning bermula dari Taman Dewi Sartika, Gasibu, Pusdai, Taman Superhero, Taman Foto, Gedung Merdeka, Alun-alun Bandung, Braga dan kembali ke Taman Dewi Sartika.",
            "br3" => "Rute Ungu akan melalui jalan-jalan di rute Taman Lansia, Gasibu, menuju Taman Cikapayang, Alun-alun Ujungberung, Museum Geologi, Pusdai dan kembali ke Taman Lansia.",
            "br4" => "Rute Hijau yang akan membawa wisatawan melewati Chinatown, start di Alun Alun menuju Pasir Kaliki, Alun-alun Cicendo, Karang Setra, UPI, GOR Padjadjaran dan kembali ke Alun Alun.",
            "br5" => "Rute Merah Muda yang akan melewati Gasibu, start di Taman Lansia menuju Taman Pasupati (Taman Jomblo), Teras Cikapayang, Teras Cihampelas, dan kembali ke Taman Lansia.",
            "bf1" => "Secara fisik, Bandros yang basisnya Hino Dutro ini memiliki panjang 747 cm dan tinggi 315 cm serta lebar 210 cm. Di tingkat bawah, ada sejumlah kursi bulat dan kursi panjang dengan kapasitas 12 orang dan mampu memuat 20 penumpang berdiri sedangkan di tingkat atas, tersedia 24 kursi penumpang. Sopir dan kondektur Bandros diberi pakaian dengan desain khusus sehingga membuat wisatawan semakin tertarik menggunakan bus ini",
            "bt1" => "Tarif bus bandros relatif murah, hanya Rp20.000 untuk one trip dan Rp40.000 untuk multiple trip dengan rute rata-rata di atas 20 km.",
            "bj1" => "Alun Alun & Jl Diponegoro",
            "bj2" => "Senin - Minggu 08:00 - 16:00 WIB",
            "ss1" => "Bikesharing adalah moda transportasi untuk bepergian jarak pendek, misalnya dari tempat tinggal atau menginap, ke lokasi belanja atau halte bus dan stasiun kereta. Stasiun khusus disediakan untuk mengambil sepeda dan mengembalikannya di stasiun lain yang terdekat dengan tempat tujuan pengguna.",
            "sr1" => "Kunjungi kios registrasi, buat kartu member dengan membawa E-KTP, Paspor atau Identitas lain. Kartu member berupa smartcard dapat segera digunakan untuk memanfaatkan fasilitas bikesharing.",
            "sp1" => "Datangi stasiun bikesharing terdekat dari lokasi anda, gunakan aplikasi ini untuk menemukan stasiun terdekat.
            Lakukan transaksi dengan menggunakan kartu member, ikuti petunjuk pada layar:",
            "sp2" => "masukkan PIN",
            "sp3" => "pilih menu peminjaman sepeda",
            "sp4" => "lihat nomor docking yang muncul di layar kemudian ambil sepeda pada docking dengan nomor tersebut",
            "sp5" => "tekan tombol pada docking untuk melepaskan sepeda",
            "sk1" => "Kembalikan sepeda ke stasiun yang terdekat dengan tempat tujuan atau tempat persinggahan anda. Taruh sepeda ke docking manapun yang kosong.
            Lakukan proses logout dan pembayaran pada konsol terminal:",
            "sk2" => "masukkan PIN",
            "sk3" => "pilih menu pengembalian sepeda",
            "sk4" => "tunggu sampai muncul pesan selesai pada konsol terminal",
            "st1" => "Tarif untuk Boseh diatur dalam Peraturan Walikota Bandung.
            secara rinci tarifnya adalah sebagai berikut",
            "st2" => "1 Jam Pertama = Rp.1000",
            "st3" => "Jam Berikutnya = Rp.2000",
            "sj1" => "Jam operasional booth:",
            "sj2" => "Senin - Minggu // Jam 08.00 - 15.30 WIB",
            "sj3" => "Waktu operasional peminjaman:",
            "sj4" => "Senin - Minggu // Jam 06.00 - 16.00 WIB",
            "sj5" => "Waktu operasional pengembalian:",
            "sj6" => "Senin - Minggu // 24 Jam",
            "sa1" => "Booth Registrasi:",
            "sa2" => "Alun alun Bandung",
            "sa3" => "Taman Cibeunying",
            "sa4" => "Sebrang Museum Geologi",
            "sa5" => "Stasiun boseh:",
            "sa6" => "Graha Pos Riau",
            "sa7" => "Jalan Ambon",
            "sa8" => "Sebrang savoy homman",
            "sa9" => "Alun Alun Bandung",
            "sa10" => "Masjid Al-Ukhuwah",
            "sa11" => "Taman Veteran",
            "sa12" => "Simpang Dago",
            "sa13" => "DPRD Kota Bandung",
            "sa14" => "Jalan GANESA",
            "sa15" => "Jalan Teuku Umar",
            "sa16" => "Kantor Dispora Kota Bandung",
            "sa17" => "Sebrang Museum Geologi",
            "sa18" => "Cibeunying",
            "sa19" => "Taman Lansia",
            "sa20" => "SMAN 20",
            "pt1" => "Parkir adalah keadaan tidak bergerak suatu kendaraan yang bersifat sementara karena ditinggalkan pengemudinya",
            "pp1" => "Dengan alasan keselamatan jangan parkir di:",
            "pp2" => "Sepanjang 6 meter sebelum dan sesudah tempat penyebarangan pejalan kaki / zebra cross",
            "pp3" => "Sepanjang 25 meter sebelum dan sesudah tikungan tajam",
            "pp4" => "Sepanjang 50 meter sebelum dan sesudah jembatan",
            "pp5" => "Sepanjang 100 meter sebelum dan sesudah perlintasan sebidang",
            "pp6" => "Sepanjang 25 meter sebelum dan sesudah persimpangan",
            "pp7" => "Sepanjang 6 meter sebelum dan sesudah akses bangunan gedung",
            "pp8" => "Sepanjang 6 meter sebelum dan sesudah keran pemadam kebakan / hidran",
            "pk1" => "3 Posisi Parkir Kendaraan :",
            "pk2" => "Parkir Tegak Lurus",
            "pk3" => "Parkir Paralel",
            "pk4" => "Parkir Serong",
            "pj1" => "Bus dan Truck :",
            "pj2" => "1 jam pertama = Rp.5000",
            "pj3" => "1 jam berikutnya = Rp.3000",
            "pj4" => "Roda Empat :",
            "pj5" => "1 jam pertama = Rp.3000",
            "pj6" => "1 jam berikutnya = Rp.2000",
            "pj7" => "Sepeda Motor :",
            "pj8" => "1 jam pertama = Rp.1500",
            "pj9" => "1 jam berikutnya = Rp.1000",
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
