<?php
// Check if the cookie is set
if(!isset($_COOKIE["username"])) {
  // If the cookie is not set, instruct the client to set the cookie
  echo "Cookie named 'username' is not set!<br>";
  echo "Please set the cookie by clicking the link below:<br>";
  echo "<a href='./setcookie.php'>Set Cookie</a>";
} else {
  // If the cookie is set, display its value
  echo "Cookie 'username' is set!<br>";
  echo "Value is: " . $_COOKIE["username"];
}