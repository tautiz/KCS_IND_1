<?php

namespace KCS\Repository;

use KCS\DbConnect as DB;

class BaseRepository
{
    private DB $conn;

    public function __construct(DB $conn)
    {
        $this->conn = $conn;
    }
}
