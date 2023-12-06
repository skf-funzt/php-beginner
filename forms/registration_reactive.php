<!DOCTYPE html>
<html>

<body>

  <h2>Registration Form</h2>

  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $display_form = "none";
  } else {
    $display_form = "block";
  }
  ?>

  <form style="display: <?php echo $display_form; ?>" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required><br>
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required><br>
    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required><br>
    <label for="confirm_password">Confirm Password:</label>
    <input type="password" id="confirm_password" name="confirm_password" required><br>
    <input type="submit" value="Register">
  </form>

  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    if (empty($name) || empty($email) || empty($password) || empty($confirm_password)) {
      echo "All fields are required";
    } else if ($password != $confirm_password) {
      echo "Passwords do not match";
    } else {
      echo "Thank you for registering, " . $name . "!";
      // Here you would typically insert the data into a database
    }
  }
  ?>

</body>

</html>