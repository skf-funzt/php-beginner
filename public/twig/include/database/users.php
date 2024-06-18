<?php

require_once 'db.php';

class User
{
  private $db;

  public function __construct()
  {
    $this->db = (new Database())->getPdo();
    $this->createTable();
  }

  public function find($id)
  {
    $stmt = $this->db->prepare("SELECT * FROM users WHERE id = :id");
    $stmt->execute(['id' => $id]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
  }

  public function findByEmail($email)
  {
    $stmt = $this->db->prepare("SELECT * FROM users WHERE email = :email");
    $stmt->execute(['email' => $email]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
  }

  public function create($name, $email, $password)
  {
    $stmt = $this->db->prepare("INSERT INTO users (name, email, password) VALUES (:name, :email, :password)");
    $stmt->execute([
      'name' => $name,
      'email' => $email,
      'password' => password_hash($password, PASSWORD_DEFAULT),
    ]);
    return $this->db->lastInsertId();
  }

  public function createTable()
  {
    $sql = "
        CREATE TABLE IF NOT EXISTS users (
            id INT AUTO_INCREMENT PRIMARY KEY,
            name VARCHAR(100) NOT NULL,
            email VARCHAR(100) NOT NULL UNIQUE,
            password VARCHAR(255) NOT NULL
        )
    ";

    $this->db->exec($sql);
  }
}