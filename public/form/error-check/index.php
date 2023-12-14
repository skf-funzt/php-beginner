<?php
  // Include the registration.php file
  include_once('../../../include/form/registration.php');

  // If the form was submitted, check for errors
  if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $errors = validate($_POST); // Call the validate function
    if(empty($errors)) {
      // Redirect to welcome.php after 3 seconds
      $currentDirectory = dirname($_SERVER['PHP_SELF']);
      header("location: $currentDirectory/../welcome.php?userName={$_POST['name']}");
      die(); // Equivalent to exit();
    }
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
    <input type="text" id="name" name="name" required>
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>
    <label for="pwd">Password:</label>
    <input type="password" id="pwd" name="pwd" required>
    <label for="pwd">Retype Password:</label>
    <input type="password" id="pwd-verify" name="pwd-verify" required>
    <div class="row">
      <input type="checkbox" id="newsletter" name="newsletter">
      <label for="newsletter">Subscribe to newsletter</label>
    </div>
    <input type="submit" value="Register">
  </form>
  <div id="message">
    <?php
      if(isset($errors)) {
        echo create_error_template($errors);
      }
    ?>
  </div>
</body>
</html>