<?php
$host = 'localhost:3306';
$dbname = 'mariadb';
$username = 'root';
$password = 'mariadb';

try {
  $dsn = "mysql:host=$host;dbname=$dbname";
  $pdo = new PDO($dsn, $username, $password);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected to the database successfully!";

// Print some infos about the connection
  echo "<pre>";
  echo "PDO::ATTR_CONNECTION_STATUS: " . $pdo->getAttribute(PDO::ATTR_CONNECTION_STATUS) . "\n";
  echo "PDO::ATTR_DRIVER_NAME: " . $pdo->getAttribute(PDO::ATTR_DRIVER_NAME) . "\n";
  echo "PDO::ATTR_SERVER_INFO: " . $pdo->getAttribute(PDO::ATTR_SERVER_INFO) . "\n";
  echo "PDO::ATTR_CLIENT_VERSION: " . $pdo->getAttribute(PDO::ATTR_CLIENT_VERSION) . "\n";
  echo "PDO::ATTR_SERVER_VERSION: " . $pdo->getAttribute(PDO::ATTR_SERVER_VERSION) . "\n";
  echo "PDO::ATTR_AUTOCOMMIT: " . $pdo->getAttribute(PDO::ATTR_AUTOCOMMIT) . "\n";
  echo "PDO::ATTR_CASE: " . $pdo->getAttribute(PDO::ATTR_CASE) . "\n";
  echo "PDO::ATTR_DRIVER_NAME: " . $pdo->getAttribute(PDO::ATTR_DRIVER_NAME) . "\n";
  echo "PDO::ATTR_ERRMODE: " . $pdo->getAttribute(PDO::ATTR_ERRMODE) . "\n";
  echo "PDO::ATTR_ORACLE_NULLS: " . $pdo->getAttribute(PDO::ATTR_ORACLE_NULLS) . "\n";
  echo "PDO::ATTR_PERSISTENT: " . $pdo->getAttribute(PDO::ATTR_PERSISTENT) . "\n";
  echo "</pre>";

  // Close the database connection
  unset($pdo);

} catch (PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}