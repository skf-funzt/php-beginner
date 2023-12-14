<?php
// If the form was submitted, check for errors
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  // Redirect to welcome.php after 3 seconds
  $currentDirectory = dirname($_SERVER['PHP_SELF']);
  $userName = $_POST['name'];
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
  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name">
    <label for="email">Email:</label>
    <input type="email" id="email" name="email">
    <label for="pwd">Password:</label>
    <input type="password" id="pwd" name="pwd">
    <label for="pwd">Retype Password:</label>
    <input type="password" id="pwd-verify" name="pwd-verify">
    <div class="row">
      <input type="checkbox" id="newsletter" name="newsletter">
      <label for="newsletter">Subscribe to newsletter</label>
    </div>
    <input type="submit" value="Register">
  </form>
</body>

</html>