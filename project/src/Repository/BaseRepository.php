<?php

namespace KCS\Repository;

use KCS\DbConnect as DB;
use PDO;

class BaseRepository
{
    public PDO $conn;

    public function __construct(DB $conn)
    {
        $this->conn = $conn->getConn();
    }
}
