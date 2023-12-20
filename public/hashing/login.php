<?php
const usersDir = "../../users/";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = $_POST["username"];
  $password = $_POST["password"];
  // Check if the hashed password matches the one in the user's JSON file
  // CHekc if the file exists
  if (!file_exists(usersDir . $username . ".json")) {
    $errorMessage = "You need to register first.";
    
  } else {
    $user = json_decode(file_get_contents(usersDir . $username . ".json"), true);
    if (password_verify($password, $user["password"])) {
      // route to the index page
      header("Location: ./index.php");
    } else {
      // Show an error message
      $errorMessage = "Invalid username or password.";
    }
  }
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
  <h1>Login</h1>
  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <label for="username">Username</label>
    <input type="text" id="username" name="username" required>
    <label for="password">Password</label>
    <input type="password" id="password" name="password" required>
    <input type="submit" value="Submit">
    <button class="text-button" onclick="window.location.href = './registration.php';">Register</button>
  </form>
  <?php if (isset($errorMessage)) { ?>
    <p class="error-message"><?php echo $errorMessage; ?></p>
  <?php } ?>
</body>
</html>