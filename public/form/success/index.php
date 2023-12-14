<?php
// Include the registration.php file
include_once('../../../include/form/registration.php');

$successful = false;

// If the form was submitted, check for errors
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $errors = validate($_POST); // Call the validate function
  if (empty($errors)) {
    $successful = true;
    // Redirect to welcome.php after 3 seconds
    $currentDirectory = dirname($_SERVER['PHP_SELF']);
    $newsletterParameter = (isset($_POST['newsletter']))
      ? "&newsletter={$_POST['newsletter']}" 
      : "";

    header("refresh:3;url=$currentDirectory/../welcome.php?"
      . "userName={$_POST['name']}"
      . $newsletterParameter);
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
  <?php if ($successful) : ?>
    <h1 class="success-message"> You've been registered! Please wait, we lead you to the next page.</h1>
  <?php else : ?>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
      <label for="name">Name:<span class="required"></span></label>
      <input type="text" id="name" name="name" required>
      <label for="email">Email:<span class="required"></span></label>
      <input type="email" id="email" name="email" required>
      <label for="pwd">Password:<span class="required"></span></label>
      <input type="password" id="pwd" name="pwd" required>
      <label for="pwd">Retype Password:<span class="required"></span></label>
      <input type="password" id="pwd-verify" name="pwd-verify" required>
      <div class="row">
        <input type="checkbox" id="newsletter" name="newsletter">
        <label for="newsletter">Subscribe to newsletter</label>
      </div>
      <input type="submit" value="Register">
    </form>
    <div id="message">
      <?php if (isset($errors)) : ?>
        <?php foreach ($errors as $error) : ?>
          <p class='error-message'> <?= "{$error}" ?> </p>
        <?php endforeach; ?>
      <?php endif; ?>
    </div>
  <?php endif; ?>
</body>

</html>