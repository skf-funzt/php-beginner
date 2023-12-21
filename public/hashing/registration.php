<?php
const USERS_DIR = "../../users/";
// Check if the users directory exists, if not create it
if (!file_exists(USERS_DIR)) {
  mkdir(USERS_DIR);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = $_POST["username"];
  $password = $_POST["password"];
  $passwordConfirm = $_POST["password-confirm"];
  $email = $_POST["email"];
  $terms = $_POST["terms"] ?: "not accepted";
  $role = $_POST["role"];
  // Create a user by creating a JSON file in the users directory
  // Check if the username already exists
  if (file_exists(USERS_DIR . $username . ".json")) {
    $errorMessage = "Username already exists.";
  } else {
    // Check if the passwords match
    if ($password != $passwordConfirm) {
      $errorMessage = "Passwords do not match.";
    } else {
      // Check if the terms were accepted
      if ($terms != "accepted") {
        $errorMessage = "Terms and conditions must be accepted.";
      } else {
        // Create the user
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        $user = [
          "username" => $username,
          "password" => $hashedPassword,
          "email" => $email,
          "role" => $role
        ];
        file_put_contents(USERS_DIR . $username . ".json", json_encode($user));
        // Redirect to the login page
        header("Location: ./login.php");
      }
    }
  }
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration</title>
  <link rel="stylesheet" type="text/css" href="/assets/css/main.css"></link>
  <link rel="stylesheet" type="text/css" href="/assets/css/form-style.css">
</head>
<body>
  <h1>Registration</h1>
  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username">
    <label for="email">Email:</label>
    <input type="email" id="email" name="email">
    <label for="password">Password:</label>
    <input type="password" id="password" name="password">
    <label for="password-confirm">Confirm Password:</label>
    <input type="password" id="password-confirm" name="password-confirm">
    <div class="row">
      <input type="checkbox" id="terms" name="terms" value="accepted">
      <label for="terms">
      <a href="/files/terms.php" target="_blank">Terms and Conditions</a>  
    </div>
    <label for="role">Role:</label>
    <select id="role" name="role">
      <option value="user">User</option>
      <option value="admin">Admin</option>
    </select>
    <input type="submit" value="Register">
  </form>
</body>
</html>