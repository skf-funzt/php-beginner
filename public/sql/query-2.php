<?php
$connection = mysqli_connect("localhost:3306", "root", "mariadb", "mariadb");

$result = mysqli_query($connection, "SELECT * FROM users");

if ($result) {
  // Fetch all rows as an associative array
  $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);

  // Do something with the fetched rows
  foreach ($rows as $row) {
    // Accessing the data
    echo "User ID: " . $row['id'] . "<br>";
    echo "Username: " . $row['name'] . "<br>";
    echo "Email: " . $row['email'] . "<br>";
    echo "<br>";
  }

  // Free the result set
  mysqli_free_result($result);
} else {
  // Handle query error
  echo "Error executing the query: " . mysqli_error($conn);
}

// Close the database connection
mysqli_close($connection);
