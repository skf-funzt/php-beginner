<pre>
<?php
$password = "myPassword123";

// PASSWORD_DEFAULT uses bcrypt - may change in the future as new algorithms are added to PHP
$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

echo "Original Password: " . $password . "\n";
echo "Password Hash: " . $hashedPassword . "\n\n";

// Verify password that was presented by the user
$usersPassword = "myPassword123";

echo match(password_verify($usersPassword, $hashedPassword)) {
  true => "Password is valid!\n",
  false => "Invalid password.\n",
};

?>
</pre>