<form method="POST" action="/super-globals/post.php">
  <label for="msg">Some text:</label>
  <input type="text" name="msg" id="msg"><br>

  <input type="submit" value="Submit">
</form>

<?php
echo "$_POST:\n";
var_dump($_POST);
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  echo "<br>";
  $msg = $_POST['msg'];
  echo "</pre>" . "Message: " . $msg . "</pre>";
}
?>