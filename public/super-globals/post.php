<form method="POST" action="/super-globals/post.php">
  <label for="msg">Some text:</label>
  <input type="text" name="message" id="msg">
  <br>
  <input type="submit" value="Submit">
</form>

<?php
echo "POST:\n";
var_dump($_POST);
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  echo "<br>";
  $msg = $_POST['message'];
  echo "</pre>" . "Message: " . $msg . "</pre>";
}
?>