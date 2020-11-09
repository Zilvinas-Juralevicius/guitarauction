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
        'INSERT INTO persons (first_name, last_name, email, password, login_name) VALUES (:vardas, :pavarde, :el.pastas, :slaptazodis, :prisijungimo_vardas)'
    );
    $stmt->bindParam(':vardas', $data['first_name']);
    $stmt->bindParam(':pavarde', $data['last_name']);
    $stmt->bindParam(':el.pastas', $data['email']);
    $stmt->bindParam(':slaptazodis', $data['password']);
    $stmt->bindParam(':prisijungimo_vardas', $data['login_name']);
    $stmt->execute();

    }

}