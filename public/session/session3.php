<?php
// Start a new session
session_start();
?>

<h1>Session Deletion</h1>

<p>$_SESSION["username"]: <?php echo $_SESSION["username"] ?></p>
<p>$_SESSION["email"]: <?php echo $_SESSION["email"] ?></p>

<a href="./session2.php">Check deletion</a>

<?php
// remove all session variables
session_unset();

// destroy the session
session_destroy();
?>