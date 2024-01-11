<?php
$host = 'localhost:3306';
$dbname = 'mariadb';
$username = 'root';
$password = 'mariadb';

try {
  // Connect to the database
  $dsn = "mysql:host=$host;dbname=$dbname";
  $pdo = new PDO($dsn, $username, $password);

  // Prepare a SQL statement
  $stmt = $pdo->prepare("SELECT * FROM users");

  // Execute the statement
  $stmt->execute();

  // Fetch the results
  $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

  // Output the results as JSON
  echo json_encode($results);

  // Close the database connection
  unset($pdo);
} catch (PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}