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
}