<?php
$connection = mysqli_connect("localhost:3306", "root", "mariadb", "mariadb");

// SQL query
$query = "SELECT * FROM users";

// Executing the query
$result = mysqli_query($connection, $query);
echo "<br>";
echo "<br>";

// Checking if the query was successful
if ($result) {
  // Fetching the data from the result set
  while ($row = mysqli_fetch_assoc($result)) {
    // Accessing the data
    echo "User ID: " . $row['id'] . "<br>";
    echo "Username: " . $row['name'] . "<br>";
    echo "Email: " . $row['email'] . "<br>";
    echo "<br>";
  }
} else {
  // Handling query error
  echo "Error executing query: " . mysqli_error($connection);
}

// Closing the database connection
mysqli_close($connection);
