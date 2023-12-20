<?php
// Start a new session
session_start();

// Set session variables
$_SESSION["username"] = "JohnDoe";
$_SESSION["email"] = "john@example.com";
?>
<h1>Session Creation</h1>

<p>$_SESSION["username"]: <?php echo $_SESSION["username"] ?></p>
<p>$_SESSION["email"]: <?php echo $_SESSION["email"] ?></p>

<a href="./session2.php">Reuse the Session</a>