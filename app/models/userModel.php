<?php

class userModel{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }


    public function getAllDataInformasi()
    {
        $this->db->query("SELECT * FROM informasi");
        return $this->db->resultSet();
    }

    public function getinformasiById($id)
    {
        $this->db->query('SELECT * FROM informasi WHERE ID_informasi=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }
}