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
        'INSERT INTO persons (first_name, last_name, email, password, login_name) 
VALUES (:vardas, :pavarde, :elpastas, :slaptazodis, :login)'
    );
    $stmt->bindParam(':vardas', $data['first_name']);
    $stmt->bindParam(':pavarde', $data['last_name']);
    $stmt->bindParam(':elpastas', $data['email']);
    $stmt->bindParam(':slaptazodis', $data['password']);
    $stmt->bindParam(':login', $data['login_name']);
    $stmt->execute();
    header("location: /");
    }

}