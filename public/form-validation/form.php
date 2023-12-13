<!DOCTYPE html>
<html>
<head>
  <title>Registration Form</title>
  <link rel="stylesheet" type="text/css" href="/assets/css/form-style.css">
</head>
<body>
  <form action="/form/register.php" method="post">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name">
    <label for="email">Email:</label>
    <input type="email" id="email" email="name">
    <label for="pwd">Password:</label>
    <input type="password" id="pwd" name="pwd">
    <label for="pwd">Retype Password:</label>
    <input type="password" id="pwd-re" name="pwd-re">
    <div class="row">
      <input type="checkbox" id="newsletter" name="newsletter">
      <label for="newsletter">Subscribe to newsletter</label>
    </div>
    <input type="submit" value="Register">
  </form>
  <div id="message"></div>
</body>
</html>