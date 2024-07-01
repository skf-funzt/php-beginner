<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = $_POST["username"];
  $password = $_POST["password"];
  // TODO: Add code to handle login
}
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="/assets/css/main.css"></link>
    <link rel="stylesheet" type="text/css" href="/assets/css/form-style.css">
  </head>
  <body>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
      <label for="username">Username</label>
      <input type="text" id="username" name="username">
      <label for="password">Password</label>
      <input type="password" id="password" name="password">
      <input type="submit" value="Submit">
      <button class="text-button" onclick="window.location.href = '/files/register-sketch.php';">Register</button>
    </form>
  </body>
</html>