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

    public function createInformasi($data)
    {
        $createInformasi = $this->API->CallAPI('POST', "informasi", "create", $data_array =  array(
            "img" => ($data['img']),
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
}