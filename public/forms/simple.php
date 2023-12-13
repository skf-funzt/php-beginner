<form method="GET" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <label for="name">Name:</label>
    <input type="text" name="name" id="name">
    <input type="submit" value="Submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (isset($_GET['name'])) {
        $name = $_GET['name'];
        echo "Hello, " . $name . "!";
    }
}

?>

<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <label for="email">Email:</label>
    <input type="email" name="email" id="email">
    <input type="submit" value="Submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['email'])) {
        $email = $_POST['email'];
        echo "Thank you for submitting your email: " . $email;
    }
}
?>
