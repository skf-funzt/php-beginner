<?php
session_start(); // Start a new session

// Check if the user is logged in and if the session has not expired
if (!isset($_SESSION["username"]) || time() - $_SESSION['timeout'] > 3) {
  // If the user is not logged in or the session has expired, redirect to the login page
  header("Location: ./login.php");
  exit();
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Fictional Social Media</title>
  <link rel="stylesheet" type="text/css" href="/assets/css/main.css"></link>
</head>
<body>
  <div>
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