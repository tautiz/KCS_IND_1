<?php

namespace KCS;

use PDO;

class DbConnect
{
    public function __construct()
    {
        $this->conn = new PDO("mysql:host=127.0.0.1;dbname=kcs_db", 'devuser', 'devpass');
        $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
}
