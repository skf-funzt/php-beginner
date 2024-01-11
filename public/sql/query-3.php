<?php
$connection = mysqli_connect("localhost:3306", "root", "mariadb", "mariadb");

$result = mysqli_query($connection, "SELECT * FROM users");

if ($result) {
  // Fetch each row as a numerical array
  while ($row = mysqli_fetch_row($result)) {
    // Accessing the data
    echo "User ID: " . $row[0] . "<br>";
    echo "Username: " . $row[1] . "<br>";
    echo "Email: " . $row[2] . "<br>";
    echo "<br>";
  }

  // Free the result set
  mysqli_free_result($result);
} else {
  // Handle query error
  echo "Error executing the query: " . mysqli_error($connection);
}

// Close the database connection
mysqli_close($connection);