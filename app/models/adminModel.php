<?php

class adminModel{
    private $namaTabelAdmin = 'admin';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
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
}