<!DOCTYPE html>
<html>
<head>
    <title>User List</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
    </style>
</head>
<body>
    <h1>User List</h1>
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

        // Start the HTML table
        echo "<table>";
        echo "<tr><th>ID</th><th>Name</th><th>Email</th><th>Password</th></tr>";

        // Output the results as table rows
        foreach ($results as $row) {
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['name'] . "</td>";
            echo "<td>" . $row['email'] . "</td>";
            echo "<td>" . $row['password'] . "</td>";
            echo "</tr>";
        }

        // End the HTML table
        echo "</table>";

        // Close the database connection
        unset($pdo);
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
    ?>
</body>
</html>