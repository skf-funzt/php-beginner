<?php
$config = require './config.php';

try {
  $dsn = "mysql:host={$config['host']};dbname={$config['dbname']}";
  return new PDO($dsn, $config['username'], $config['password']);
} catch (PDOException $e) {
  die("Connection failed: " . $e->getMessage());
}