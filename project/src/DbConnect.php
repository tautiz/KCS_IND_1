<?php

namespace KCS;

use PDO;

class DbConnect
{
    /** @var PDO $conn */
    private $conn;
    
    public function __construct()
    {
        if (!$this->conn) {
            $this->conn = new PDO("mysql:host=127.0.0.1;dbname=kcs_db", 'devuser', 'devpass');
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
    }

    public function getConn(): PDO
    {
        return $this->conn;
    }
}
