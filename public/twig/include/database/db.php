<?php

class Database {
  private $host;
  private $dbname;
  private $username;
  private $password;
  private $pdo;

  public function __construct() {
    $config = require 'config.php';
    $this->host = getenv('DB_HOST') ?: $config['DB_HOST'];
    $this->dbname = getenv('DB_NAME') ?: $config['DB_NAME'];
    $this->username = getenv('DB_USER') ?: $config['DB_USER'];
    $this->password = getenv('DB_PASS') ?: $config['DB_PASS'];
    $this->connectToDatabase();
  }

  private function connectToDatabase() {
    $dsn = "mysql:host=" . $this->host . ";dbname=" . $this->dbname;
    $options = array(
      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    );

    try {
      $this->pdo = new PDO($dsn, $this->username, $this->password, $options);
    } catch (PDOException $e) {
      echo "Connection failed: " . $e->getMessage();
    }
  }

  public function getPdo() {
    return $this->pdo;
  }
}

return new Database();