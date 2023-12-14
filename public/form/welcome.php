<?php $userName = $_GET["userName"] ?>

<!DOCTYPE html>
<html>
<head>
  <title>Hi, <?php echo $userName ?></title>
  <link rel="stylesheet" type="text/css" href="/assets/css/form-style.css">
</head>
<body>
  <h1>There you are, <?php echo $userName ?></h1>
  <p>Glad to have you on board.</p>
  <?php if(isset($_GET["newsletter"])) : ?>
    <p>You have subscribed to our newsletter.</p>
  <?php endif; ?>
</body>
</html>