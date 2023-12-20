<?php
// Start a new session
session_start();
?>

<h1>Session Reusage</h1>

<p>$_SESSION["username"]: <?php echo $_SESSION["username"] ?></p>
<p>$_SESSION["email"]: <?php echo $_SESSION["email"] ?></p>

<a href="./session3.php">Delete the Session</a>