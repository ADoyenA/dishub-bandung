<?php

class userModel{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }


    public function getAllDataInformasi()
    {
        $this->db->query("SELECT * FROM informasi, admin WHERE informasi.ID_admin = admin.ID_admin");
        return $this->db->resultSet();
    }

    public function getinformasiById($id)
    {
        $this->db->query('SELECT * FROM informasi, admin WHERE ID_informasi=:id and informasi.ID_admin = admin.ID_admin');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function getAllDataDokumentasi()
    {
        $this->db->query("SELECT * FROM dokumentasi");
        return $this->db->resultSet();
    }

    public function getDokumentasiById($id)
    {
        $this->db->query('SELECT * FROM dokumentasi WHERE ID_dokumentasi=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

}