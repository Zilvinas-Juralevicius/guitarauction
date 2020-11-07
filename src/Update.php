<?php

namespace KCS;

use PDO;

class Update
{
    private PDO $conn;

public function __construct(PDO $conn)

{
    $this->conn = $conn;
}

public function createPerson(array $data): void
{
    $stmt = $this->conn->prepare(
        'INSERT INTO persons (first_name, last_name, email, password, login_name) VALUES (:Vardas, :Pavarde, :El.pastas, :Slaptazodis, :Prisijungimo vardas)'
    );
    $stmt->bindParam(':Vardas', $data['first_name']);
    $stmt->bindParam(':Pavarde', $data['last_name']);
    $stmt->bindParam(':El.pastas', $data['email']);
    $stmt->bindParam(':Slaptazodis', $data['password']);
    $stmt->bindParam(':Prisijungimo vardas', $data['login_name']);
    $stmt->execute();

    $lastInsertId = $this->conn->lastInsertId();

    header('location: ./?action=View&id=' . $lastInsertId);
    }
}