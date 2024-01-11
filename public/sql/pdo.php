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
  $stmt = $pdo->prepare("SELECT * FROM users WHERE id = :id");

  // Bind parameter values
  $stmt->bindParam(':id', $id, PDO::PARAM_INT);

  // Set parameter values
  $id = 1; // Change this to the ID you want to fetch

  // Execute the statement
  $stmt->execute();

  // Fetch the results
  $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

  // Output the results
  foreach ($results as $row) {
    echo "ID: " . $row['id'] . '<br>';
    echo "Name: " . $row['name'] . '<br>';
    echo "Email: " . $row['email'] . '<br>';
  }

  // Close the database connection
  unset($pdo);
} catch (PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}