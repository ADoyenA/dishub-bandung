<?php

class adminModel{
    private $namaTabelAdmin = 'admin';
    private $db;
    private $API;

    public function __construct()
    {
        $this->db = new Database;
        $this->API = new CallAPI;
    }

    public function masukAdmin($data)
    {   
        $query = "SELECT * FROM ". $this->namaTabelAdmin. " WHERE
                  username=:username AND pwd=:pwd";
        $this->db->query($query);
        $this->db->bind('username', ($data['username']));
        $this->db->bind('pwd', md5($data['pwd']));
        //eksekusi
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function getAdminByUsername($username)
    {
       $this->db->query("SELECT * FROM ". $this->namaTabelAdmin. " WHERE username=:username");
       $this->db->bind('username', $username);
       return $this->db->single();
    }

    public function createInformasi($data, $img)
    {
        $createInformasi = $this->API->CallAPI('POST', "informasi", "create", $data_array =  array(
            "img" => ($img),
            "judul_informasi" => ($data['judul_informasi']),
            "kategori" => ($data['kategori']),
            "text_informasi" => ($data['text_informasi']),
            "waktu_upload" => ($data['waktu_upload']),
            "ID_admin" => ($data['ID_admin'])         
        ));
        $informasi = json_encode($createInformasi);
        $result = json_decode($informasi, true);

        return $createInformasi;
    }

    // public function getInformasi($page, $row)
    // {
    //     $getInformasi = $this->API->CallAPI('GET', "admin/informasi", "limit?page=" . $page . "&row_per_page=" . $row, "");
    //     $informasi = json_encode($getInformasi);
    //     $json = json_decode($informasi, true);

    //     $result = [
    //         "body" => $json["body"],
    //         "itemCount" => $json["itemCount"]
    //     ];

    //     return $result;
    // }

    public function getNewDataInformasi()
    {
        $getInformasi = $this->API->CallAPI('GET', "Informasi/new", "read", "");
        $informasi = json_encode($getInformasi);
        $json = json_decode($informasi, true);

        $result = [
            "body" => $json["body"],
            "itemCount" => $json["itemCount"]
        ];

        return $result;
    }

    public function getNewDataDokumentasi()
    {
        // $getInformasi = $this->API->CallAPI('GET', "Informasi/new", "read", "");
        // $informasi = json_encode($getInformasi);
        // $json = json_decode($informasi, true);

        // $result = [
        //     "body" => $json["body"],
        //     "itemCount" => $json["itemCount"]
        // ];

        // return $result;
    }

    public function record($action, $data, $tanggal, $idAdmin)
    {
        $createLog = $this->API->CallAPI('POST', "log", "create", $data_array =  array(
            "action" => ($action),
            "data" => ($data),
            "tanggal" => ($tanggal),
            "ID_admin" => ($idAdmin)         
        ));
        $record = json_encode($createLog);
        //$result = json_decode($record, true);

        return $record;

    }

    public function getLog($idAdmin)
    {
        $getLog = $this->API->CallAPI('GET', "log", "limit?ID_admin=" . $idAdmin, "");
        $log = json_encode($getLog);
        $json = json_decode($log, true);

        $result = [
            "body" => $json["body"],
            "itemCount" => $json["itemCount"]
        ];

        return $result;
    }

    public function createDokumentasi($data, $img_cover)
    {
        $createDokumentasi = $this->API->CallAPI('POST', "dokumentasi", "create", $data_array =  array(
            "img_cover" => ($img_cover),
            "judul_dokumentasi" => ($data['judul_dokumentasi']),
            "text_dokumentasi" => ($data['text_dokumentasi']),
            "waktu_upload" => ($data['waktu_upload']),
            "ID_admin" => ($data['ID_admin'])    
        ));  
        $dokumentasi = json_encode($createDokumentasi);
        $result = json_decode($dokumentasi, true);

        return $createDokumentasi;
    }

    public function createFotoKegiatan($data, $foto)
    {
        $createFotoKegiatan = $this->API->CallAPI('POST', "fotoKegiatan", "create", $data_array = array(
         "foto" => ($foto),
         "ID_dokumentasi" => ($data['ID_dokumentasi'])
        ));
        $foto = json_encode($createFotoKegiatan);
        $result = json_decode($foto, true);

        return $createFotoKegiatan;
    }

    public function getIdDokumentasi($data)
    {
        $this->db->query('SELECT ID_dokumentasi FROM dokumentasi WHERE judul_dokumentasi=:judul_dokumentasi');
        $this->db->bind('judul_dokumentasi', $data['judul_dokumentasi']);
        return $this->db->single();
    }

    public function updateInformasi($data, $img)
    {
        $updateInformasi = $this->API->CallAPI('POST', "informasi", "update", $data_array = array(
            "ID_informasi" => ($data['ID_informasi']),
            "img" => ($img),
            "judul_informasi" => ($data['judul_informasi']),
            "kategori" => ($data['kategori']),
            "text_informasi" => ($data['text_informasi']),
            "waktu_upload" => ($data['waktu_upload']),
            "ID_admin" => ($data['ID_admin']) 
        ));
        $informasi = json_encode($updateInformasi);
        $result = json_decode($informasi, true);

        return $updateInformasi;
    }

    public function deleteInformasi($data)
    {
        $deleteInformasi = $this->API->CallAPI('DELETE', "informasi", "delete", $data_array = array(
            "ID_informasi" => ($data)
        ));
        $informasi = json_encode($deleteInformasi);
        $result = json_decode($informasi, true);

        return $deleteInformasi;
    }
    
}