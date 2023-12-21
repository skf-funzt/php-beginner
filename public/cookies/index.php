<?php
session_start(); // Start a new session
$sessionLifetime = isset($_SESSION['timeout']) ? time() - $_SESSION['timeout'] : -1;

// Check if the user is logged in and if the session has not expired
if (!isset($_SESSION["username"]) || $sessionLifetime > ini_get('session.gc_maxlifetime')) {
  // If the user is not logged in or the session has expired, redirect to the login page
  header("Location: ./login.php");
  exit();
}
if (isset($_POST['theme'])) {
  setcookie('theme', $_POST['theme'], time() + (86400 * 30), "/"); // 86400 = 1 day
  $theme = $_POST['theme'];
} else {
  $theme = isset($_COOKIE['theme']) ? $_COOKIE['theme'] : 'light';
}
?>
<?php
if (isset($_POST['logout'])) {
  // Unset all of the session variables
  $_SESSION = array();
  // Clear the cookies variables username and PHPSESSID
  if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000, $params["path"], $params["domain"], $params["secure"], $params["httponly"]);
    setcookie("username", '', time() - 42000, "/");
  }
  // Unset the session
  session_unset();
  // Finally, destroy the session.
  session_destroy();
  header("Location: ./login.php"); // redirect to login page after logout
  exit();
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Fictional Social Media</title>
  <link rel="stylesheet" type="text/css" href="/assets/css/main.css"></link>
  <link rel="stylesheet" type="text/css" href="/assets/css/form-style.css"></link>
  <style>
    body {
      background-color: <?php echo $theme === 'dark' ? '#333' : '#f4f4f4'; ?>;
      color: <?php echo $theme === 'dark' ? '#f4f4f4' : '#333'; ?>;
    }
  </style>
</head>
<body>
  <div>
    <div class="row">
      <form method="post">
        <select name="theme" onchange="this.form.submit()">
          <option value="light" <?php echo $theme === 'light' ? 'selected' : ''; ?>>Light</option>
          <option value="dark" <?php echo $theme === 'dark' ? 'selected' : ''; ?>>Dark</option>
        </select>
      </form>
      <form method="post">
        <button type="submit" name="logout">Logout</button>
      </form>
    </div>
    <h2>Welcome, <?php echo htmlspecialchars($_SESSION["username"]); ?></h2>
    <button onclick="location.reload();">Reload Timeline</button>
    <h2>Timeline</h2>
    <?php
    // TODO: Fetch posts from the database and display them
    $posts = [
      ["username" => "user1", "content" => "This is a post by user1"],
      ["username" => "user2", "content" => "This is a post by user2"],
      // Add more posts as needed
    ];
    foreach ($posts as $post) {
      echo "<div class='post'>";
      echo "<h3>" . htmlspecialchars($post["username"]) . "</h3>";
      echo "<p>" . htmlspecialchars($post["content"]) . "</p>";
      echo "</div>";
    }
    ?>

</div>
</body>
</html>
