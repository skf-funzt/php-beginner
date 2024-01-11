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
  $stmt = $pdo->prepare("INSERT INTO users (name, email, password) VALUES (:name, :email, :password)");

  // Bind parameter values
  $stmt->bindParam(':name', $name, PDO::PARAM_STR);
  $stmt->bindParam(':email', $email, PDO::PARAM_STR);
  $stmt->bindParam(':password', $password, PDO::PARAM_STR);

  // Set parameter values
  $name = 'John Doe'; // Change this to the name you want to insert
  $email = 'john.doe@example.com'; // Change this to the email you want to insert
  $password = 'password'; // Change this to the password you want to insert

  // Execute the statement
  $stmt->execute();

  echo "New record created successfully<br>";

  // Read all John Doe records
  $stmt = $pdo->prepare("SELECT * FROM users WHERE name = :name");
  $stmt->bindParam(':name', $name, PDO::PARAM_STR);
  $stmt->execute();
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