<?php

class Logger{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
        $this->API = new CallAPI;
    }


    public function record($activity_name, $data)
    {
        
    }
}