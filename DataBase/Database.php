<?php

class Database 
{
    private $host;
    private $username;
    private $pass;
    private $database;

    public function __construct($host, $username, $pass, $database)
    {
        $this->host = "localhost";
        $this->username = "root";
        $this->pass = "";
        $this->database = "login_poo";
    }

    public function Connect()
    {
        $conn = new mysqli($this->host, $this->username, $this->pass, $this->database);
        return $conn;
    }
}
