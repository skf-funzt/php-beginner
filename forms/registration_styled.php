<!DOCTYPE html>
<html>

<head>
  <style>
    body {
      font-family: Arial, sans-serif;
    }

    form {
      width: 300px;
      margin: 0 auto;
    }

    label {
      display: block;
      margin-top: 20px;
    }

    input[type="text"],
    input[type="email"],
    input[type="password"] {
      width: 100%;
      padding: 10px;
      margin-top: 5px;
    }

    input[type="submit"] {
      margin-top: 20px;
      padding: 10px 20px;
      background-color: #4CAF50;
      color: white;
      border: none;
      cursor: pointer;
    }

    input[type="submit"]:hover {
      background-color: #45a049;
    }
  </style>
</head>

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
    <input type="text" id="name" name="name" required>
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>
    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required>
    <label for="confirm_password">Confirm Password:</label>
    <input type="password" id="confirm_password" name="confirm_password" required>
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