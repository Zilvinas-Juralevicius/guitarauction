<?php

namespace KCS;

use PDO;

class View
{
    private PDO $conn;

    public function __construct(PDO $conn)
    {
        $this->conn = $conn;
    }

    public function viewGuitars(): array
    {
        $stmt = $this->conn->prepare('SELECT id, title, description, price, img FROM guitars');
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        return $stmt->fetchAll();
    }
}