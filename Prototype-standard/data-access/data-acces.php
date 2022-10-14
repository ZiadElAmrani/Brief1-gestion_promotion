<?php








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