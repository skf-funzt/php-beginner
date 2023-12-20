<?php
// Set a cookie
setcookie("username", "JohnDoe", time() + (3), "/");
echo "Cookie 'username' has been set!";
// Navigate back with a link
echo "<br><a href='cookies.php'>Back</a>";