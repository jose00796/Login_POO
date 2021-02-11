<?php

class Database 
{
    private $host;
    private $user;
    private $pass;
    private $database;

    public function __construct($host, $user, $pass, $database)
    {
        $this->host = "localhost";
        $this->user = "root";
        $this->pass = "";
        $this->database = "login_poo";
    }

    public function Connect()
    {
        $conn = new mysqli($this->host, $this->user, $this->pass, $this->database);
        return $conn;
    }
}
