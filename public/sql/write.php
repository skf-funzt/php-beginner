<?php
$connection = mysqli_connect("localhost:3306", "root", "mariadb", "mariadb");

// Prepare data
$name = 'John Doe'; // Change this to the name you want to insert
$email = 'john.doe@example.com'; // Change this to the email you want to insert
$password = 'password'; // Change this to the password you want to insert

// Prepare an SQL statement
$sql = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password')";

// Execute the statement
if (mysqli_query($connection, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($connection);
}

// Read all John Doe records
$sql = "SELECT * FROM users WHERE name = '$name'";
$result = mysqli_query($connection, $sql);

// Output the results
while ($row = mysqli_fetch_assoc($result)) {
  echo "ID: " . $row['id'] . '<br>';
  echo "Name: " . $row['name'] . '<br>';
  echo "Email: " . $row['email'] . '<br>';
}

// Close the database connection
mysqli_close($connection);