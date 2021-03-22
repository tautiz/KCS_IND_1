<?php

namespace KCS\Repository;

use PDO;

class VisitorRepository extends BaseRepository
{
    public function all(): array
    {
        $stmt = $this->conn->prepare('SELECT * FROM visitors');
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $stmt->execute();

        return $stmt->fetchAll();
    }
}
