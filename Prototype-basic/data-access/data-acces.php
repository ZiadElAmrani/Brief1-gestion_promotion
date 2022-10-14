<?php

/* Class Connection {
    private $host;
    private $user;
    private $password;
    private $db;

    protected function connect() {

    $this->host = "localhost";
    $this->user = "root";
    $this->password = "";
    $this->db = "project1";

        $conn = new mysqli($this->host, $this->user, $this->password, $this->db);
        return $conn;
    }
} */








class Connection
{
    private $host = "localhost";
    private $user = "root";
    private $password = "";
    private $db = "project1";
    private $conn;





    function __construct()
    {
        $this->conn = new mysqli($this->host, $this->user, $this->password, $this->db);
        if ($this->conn->connect_error) {
            echo ("connection to database failed");
        }
        return $this->conn;
    }
}
