<?php

class userModel{
    private $db;
    private $API;

    public function __construct()
    {
        $this->db = new Database;
        $this->API = new CallAPI;
    }

    public function getAllDataInformasi()
    {
        $getInformasi = $this->API->CallAPI('GET', "informasi", "read", "");
        $informasi = json_encode($getInformasi);
        $json = json_decode($informasi, true);

        $result = [
            "body" => $json["body"],
            "itemCount" => $json["itemCount"]
        ];

        return $result;
    }

    public function getLimitAllDataInformasi($page, $row)
    {
        $getInformasi = $this->API->CallAPI('GET', "informasi", "limit?page=" . $page . "&row_per_page=" . $row, "");
        $informasi = json_encode($getInformasi);
        $json = json_decode($informasi, true);

        $result = [
            "body" => $json["body"],
            "itemCount" => $json["itemCount"]
        ];

        return $result;
        //return $result['body'];
        // $this->db->query("SELECT * FROM informasi, admin WHERE informasi.ID_admin = admin.ID_admin");
        // return $this->db->resultSet();
    }

    public function getInformasiById($id)
    {
        $getInformasiById = $this->API->CallAPI('GET', "informasi", "single_read?ID_informasi=". $id, "");
        $informasi = json_encode($getInformasiById);
        $result = json_decode($informasi, true);

        return $result;
        // $this->db->query('SELECT * FROM informasi, admin WHERE ID_informasi=:id and informasi.ID_admin = admin.ID_admin');
        // $this->db->bind('id', $id);
        // return $this->db->single();
    }

    public function getAllDataDokumentasi()
    {
        $getDokumentasi = $this->API->CallAPI('GET', "dokumentasi", "read", "");
        $dokumentasi = json_encode($getDokumentasi);
        $result = json_decode($dokumentasi, true);

        return $result['body'];
        // $this->db->query("SELECT * FROM dokumentasi");
        // return $this->db->resultSet();
    }

    public function getDokumentasiById($id)
    {
        $getDokumentasiById = $this->API->CallAPI('GET', "dokumentasi", "single_read?ID_dokumentasi=" . $id, "");
        $dokumentasi = json_encode($getDokumentasiById);
        $result = json_decode($dokumentasi, true);

        return $result;

        // $this->db->query('SELECT * FROM dokumentasi WHERE ID_dokumentasi=:id');
        // $this->db->bind('id', $id);
        // return $this->db->single();
    }

}