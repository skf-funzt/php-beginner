<pre>
<?php
// Example using md5 hash function
$password = "myPassword123";
$hashedPassword = md5($password);

echo "Original Password: " . $password . "\n";
echo "MD5 Hashed Password: " . $hashedPassword . "\n\n";


$password = "myPassword123";
$hashedPassword = hash('sha256', $password);

echo "Original Password: " . $password . "\n";
echo "SHA256 Hashed Password: " . $hashedPassword . "\n\n";

// PASSWORD_DEFAULT uses bcrypt - may change in the future as new algorithms are added to PHP
$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

echo "Original Password: " . $password . "\n";
echo "Password Hash: " . $hashedPassword . "\n\n";

// Alternative usage
$hashedPassword = password_hash($password, PASSWORD_BCRYPT, ['cost' => 12]);

echo "Original Password: " . $password . "\n";
echo "Password Hash Custom: " . $hashedPassword . "\n\n";
?>
</pre>