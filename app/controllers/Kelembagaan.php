<?php

class Kelembagaan extends Controller{

    public function bidang(){
        $data['judul'] = 'Bidang-Bidang';
        $data['data'] = [
            'subJudulA' => 'A.  BIDANG PERENCANAAN DAN PEMBINAAN TRANSPORTASI',
            'sjA-p1' => 'Bidang Perencanaan dan Pembinaan Transportasi (PPT) yang dipimpin oleh seorang Kepala Bidang mempunyai tugas melaksanakan sebagian tugas Kepala Dinas lingkup Perencanaan dan Pembinaan Transportasi.',
            'sjA-p2' => 'Bidang Perencanaan dan Pembinaan Transportasi memilki fungsi sebagai penyusun rencana dan program kerja lingkup perencanaan dan pembinaan transportasi, seperti halnya perencanaan dan evaluasi trayek angkutan untuk Trans Metro Bandung, Bus Sekolah, Bandros. Bidang PPT juga menjalankan fungsi sebagai pembinaan transportasi melalui pelaksanaan program kelaikan dan keselamatan transportasi, salah satunya ialah kegiatan pengujian kendaraan bermotor atau sering disebut Uji KIR.',
            'sjA-p3' => 'Dalam menjalankan tugas, fungsi dan uraian tugas sebagaimana dimaksud, Kepala Bidang Perencanaan dan Pembinaan Transportasi dibantu oleh beberapa seksi yang terdiri dari:',
            'sjA-no1' => 'Seksi Perencanaan dan Evaluasi Transportasi',
            'sjA-no2' => 'Seksi Kelaikan dan Keselamatan Transportasi, dan',
            'sjA-no3' => 'Seksi Bina Transportasi.',
            'subJudulB' => 'B.  BIDANG MANAJEMEN TRANSPORTASI DAN PARKIR',
            'sjB-p1' => 'Bidang Manajemen Transportasi dan Parkir (MTP) yang dipimpin oleh seorang Kepala Bidang mempunyai tugas melaksanakan sebagian tugas Kepala Dinas lingkup manajemen transportasi dan parkir.',
            'sjB-p2' => 'Bidang Manajemen Transportasi dan Parkir adalah bidang yang memiliki fungsi sebagai penyusun rencana dan program kerja lingkup manajemen transportasi dan parkir. Salah satu kegiatan yang dilakukan ialah pengaturan perparkiran Kota Bandung baik on-street parking maupun off-street parking yang berkoordinasi dengan UPT Parkir Dinas Perhubungan Kota Bandung. Bidang MTP memiliki Seksi Manajemen Transportasi yang salah tugasnya menjalankan Air Traffic Control Surveillance (ATCS) sebagai salah satu komponen manajemen transportasi di Kota Bandung.',
            'sjB-p3' => 'Dalam menjalankan tugas, fungsi dan uraian tugas sebagaimana dimaksud, kepala Bidang Manajemen Transportasi dan Parkir dibantu oleh beberapa seksi yang terdiri dari:',
            'sjB-no1' => 'Seksi Manajemen Transportasi,',
            'sjB-no2' => 'Seksi Manajemen Perparkiran, dan',
            'sjB-no3' => 'Seksi Manajemen Angkutan.',
            'subJudulC' => 'C.  BIDANG PENGENDALIAN DAN KETERTIBAN TRANSPORTASI',
            'sjC-p1' => 'Bidang Pengendalian dan Ketertiban Transportasi (PDKT) yang dipimpin oleh seorang Kepala Bidang mempunyai tugas melaksanakan sebagian tugas Kepala Dinas lingkup pengendalian dan ketertiban transportasi.',
            'sjC-p2' => 'Bidang Pengendalian dan Ketertiban Transportasi adalah bidang yang memiliki fungsi sebagai penyusun rencana dan program kerja pengendalian dan ketertiban transportasi, dimana personil PDKT akan masyarakat sering jumpai di jalanan utama Kota Bandung dalam menjalankan fungsi pengendalian yang berkoordinasi dengan kepolisian untuk mengatur lalu lintas Kota Bandung. Bidang PDKT juga dikenal sebagai penegak peraturan daerah mengenai pelanggaran parkir tepi jalan dengan tindakan cabut pentil dan penempelan stiker peringatan terhadap pelanggar.',
            'sjC-p3' => 'Dalam menjalankan tugas, fungsi dan uraian tugas sebagaimana dimaksud, Kepala Bidang Pengendalian dan Ketertiban Transportasi dibantu oleh beberapa seksi yang terdiri dari:',
            'sjC-no1' => 'Seksi Ketertiban Transportasi,',
            'sjC-no2' => 'Seksi Pengamanan dan Pengawasan, dan',
            'sjC-no3' => 'Seksi Pengaturan Transportasi.',
            'subJudulD' => 'D.  BIDANG SARANA DAN PRASARANA TRANSPORTASI',
            'sjD-p1' => 'Bidang Sarana dan Prasarana Transportasi (SPT) yang dipimpin oleh seorang Kepala Bidang mempunyai tugas  melaksanakan sebagian tugas Kepala Dinas lingkup perlengkapan jalan, sarana angkutan dan prasarana.',
            'sjD-p2' => 'Bidang Sarana dan Prasarana Transportasi (SPT) adalah bidang yang memiliki fungsi sebagai penyusun rencana dan program kerja lingkup sarana dan prasarana transportasi. Bidang SPT memastikan terpenuhinya kebutuhan sarana dan prasana berkaitan dengan penyelenggaraan urusan perhubungan khususnya terkait perlengkapan jalan, sarana angkutan dan prasarana bagi Dinas Perhubungan Kota Bandung.',
            'sjD-p3' => 'Dalam menjalankan tugas, fungsi dan uraian tugas, Kepala Bidang sarana dan prasarana transportasi dibantu oleh beberapa seksi yang terdiri dari:',
            'sjD-no1' => 'Seksi Perlengkapan Jalan,',
            'sjD-no2' => 'Seksi Sarana Angkutan, dan',
            'sjD-no3' => 'Seksi Prasarana.'
        ];
        $this->view('templates/beforeHeader', $data);
        $this->view('templates/header', $data);
        $this->view('kelembagaan/bidang', $data);
        $this->view('templates/footer', $data);
        $this->view('templates/afterFooter', $data);
    }

    public function sekretariat(){
        $data['judul'] = 'Sekretariat';
        $data['data'] = [
            'subJudulA' => 'A.  SEKRETARIAT DINAS',
            'p1' => 'Sekretariat Dinas Perhubungan dipimpin oleh seorang Sekretaris yang mempunyai tugas melaksanakan sebagian tugas Kepala Dinas lingkup kesekretariatan yang meliputi pengelolaan umum dan kepegawaian, pengelolaan keuangan, pengoordinasian penyusunan program, data dan informasi serta pengoordinasian tugas-tugas bidang.',
            'p2' => 'Dalam menjalankan menjalankan tugas, fungsi dan uraian tugas sebagaimana dimaksud, Sekretaris Dinas Perhubungan dibantu oleh beberapa sub bagian yang terdiri dari:',
            'no1' => 'Sub Bagian Umum dan Kepegawaian;',
            'no2' => 'Sub Bagian Keuangan; dan',
            'no3' => 'Sub Bagian Program, Data dan Informasi.'
        ];

        $this->view('templates/beforeHeader', $data);
        $this->view('templates/header', $data);
        $this->view('kelembagaan/sekretariat', $data);
        $this->view('templates/footer', $data);
        $this->view('templates/afterFooter', $data);
    }

    public function unit_pelaksana_teknis(){
        $data['judul'] = 'Unit Pelaksana Teknis';
        $data['data'] = [
            'subJudulA' => 'A.  UNIT PELAKSANA TEKNIS ANGKUTAN',
            'sjA-p1' => 'Unit Pelaksana Teknis Angkutan (UPT Angkutan) pada Dinas Perhubungan Kota Bandung mempunyai tugas melaksanakan sebagian tugas Dinas Perhubungan lingkup pengelolaan angkutan. Dalam menyelenggarakan tugas, UPT Angkutan memiliki fungsi: penyusunan rencana dan teknis operasional pelaksanaan pengelolaan angkutan, pelaksanaan operasional angkutan, pelaksanaan ketatausahaan UPT, dan pelaksanaan pengawasan, pengendalian, evaluasi dan pelaporan kegiatan pengelolaan angkutan.',
            'sjA-p2' => 'UPT Angkutan merupakan unit pelaksana teknis yang menjalankan pelayanan publik untuk masyarakat Kota Bandung melalui penyediaan transportasi atau angkutan massal seperti Bus Trans Metro Bandung (TMB) yang sementara ini memiliki 5 (lima) trayek di dalam Kota Bandung. Selain pelayanan TMB, UPT Angkutan Dinas Perhubungan Kota Bandung melakukan pelayanan Bus Sekolah yang merupakan pelayanan gratis bagi siswa-siswi di Kota Bandung dan menyediakan pelayanan penyewaan sepeda melalui fasilitas Boseh (Bike On the Street Everybody Happy). Mendukung pariwisata Kota Bandung, UPT Angkutan Dinas Perhubungan Kota Bandung menjalankan pelayanan Bandros (Bandung Tour on the Bus) untuk memfasilitasi wisatawan yang berkunjung ke Kota Bandung.',
            'subJudulB' => 'B.  UNIT PELAKSANA TEKNIS PARKIR',
            'sjB-p1' => 'Unit Pelaksana Teknis Pengelolaan Perparkiran (UPT Parkir) Dinas Perhubungan Kota Bandung mempunyai tugas melaksanakan sebagian tugas Dinas Perhubungan lingkup perparkiran. Dalam menyelenggarakan tugas, UPT Parkir pada Dinas Perhubungan memiliki fungsi: penyusunan rencana dan teknis operasional pelaksanaan peningkatan dan pengembangan pengelolaan perparkiran, pelaksanaan operasional pengelolaan dan penataan perparkiran, pelaksanaan ketatausahaan UPT dan pelaksanaan pengawasan, pengendalian, evaluasi dan pelaporan kegiatan pengelolaan perparkiran.',
            'sjB-p2' => 'UPT Parkir merupakan pelaksana teknis yang menjalankan pelayanan publik bagi masyarakat Kota Bandung melalui penyediaan fasilitas parkir pada badan jalan (on-street parking). Pelayanan parkir pada badan jalan di Kota Bandung terbagi atas 3 (tiga) area yaitu: pusat; penyangga dan pinggiran dengan perbedaan tarif dari setiap jenis kendaraan dan area parkir. Pelayanan parkir pada badan jalan dilakukan UPT Parkir dengan mengkoordinir juru parkir resmi dan penerapan sistem pembayaran parkir melalui mesin parkir otomatis di beberapa lokasi jalan di Kota Bandung.',
            'subJudulC' => 'C.  UNIT PELAKSANA TEKNIS TERMINAL',
            'sjC-p1' => 'Unit Pelaksana Teknis Pengelolaan Terminal (UPT Terminal) Dinas Perhubungan Kota Bandung mempunyai tugas melaksanakan sebagian tugas Dinas Perhubungan lingkup pengelolaan terminal. UPT Pengelolaan Terminal pada Dinas Perhubungan Kota Bandung mempunyai fungsi: penyusunan rencana dan teknis operasional pelaksanaan peningkatan dan pengembangan pengelolaan terminal.',
            'sjC-p2' => 'UPT Terminal merupakan pelaksana teknis yang menjalankan pelayanan publik bagi masyarakat Kota Bandung melalui penyediaan fasilitas terminal bagi angkutan dalam kota maupun angkutan antar kota. Pelayanan terminal di Kota Bandung terbagi atas beberapa jenis terminal, mulai dari terminal tipe A sampai dengan terminal tipe C dengan perbedaan berdasarkan jenis angkutan yang ada di lokasi terminal tersebut. Pelayanan terminal oleh UPT Kota Bandung meliputi pelayanan terhadap angkutan dan pelayanan terhadap calon penumpang dengan penyediaan sarana dan prasarana pendukung.'
        ];
        $this->view('templates/beforeHeader', $data);
        $this->view('templates/header', $data);
        $this->view('kelembagaan/unit_pelaksana_teknis', $data);
        $this->view('templates/footer', $data);
        $this->view('templates/afterFooter', $data);
    }

    
}