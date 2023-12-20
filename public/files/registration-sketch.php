<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = $_POST["username"];
  $password = $_POST["password"];
  $passwordConfirm = $_POST["password-confirm"];
  $email = $_POST["email"];
  $terms = $_POST["terms"];
  $role = $_POST["role"];
  // TODO: Add code to handle registration
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