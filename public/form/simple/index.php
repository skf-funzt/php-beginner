<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $currentDirectory = dirname($_SERVER['PHP_SELF']);
  header("location: $currentDirectory/../welcome.php?userName={$_POST['name']}");
}
?>

<!DOCTYPE html>
<html>

  <head>
    <title>Registration Form</title>
    <link rel="stylesheet" type="text/css" href="/assets/css/form-style.css">
  </head>

  <body>
    <form action="/form/simple/index.php" method="post">
      <label for="name">Name:</label>
      <input type="text" id="name" name="name">
      <label for="email">Email:</label>
      <input type="text" id="email" name="email">
      <label for="pwd">Password:</label>
      <input type="text" id="pwd" name="pwd">
      <label for="pwd">Retype Password:</label>
      <input type="text" id="pwd-verify" name="pwd-verify">
      <div class="row">
        <input type="checkbox" id="newsletter" name="newsletter">
        <label for="newsletter">Subscribe to newsletter</label>
      </div>
      <input type="submit" value="Register">
    </form>
  </body>

</html>