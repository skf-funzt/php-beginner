<pre>
<?php
// User data
$userData = [
    'username' => 'JohnDoe',
    'email' => 'john@example.com',
    'role' => 'admin'
];
echo "user data object: \n";
var_dump($userData);
echo '<br>';

// Convert the array into a string
$userDataString = json_encode($userData);
echo "user data encoded as JSON string: \n";
var_dump($userDataString);
echo '<br>';

// Save user data using fwrite
$file = fopen('user.txt', 'w');
fwrite($file, $userDataString);
fclose($file);

// Load user data using fread
$file = fopen('user.txt', 'r');
$size = filesize('user.txt');
$userDataLoaded = fread($file, $size);
fclose($file);
echo "User data loaded successfully:\n";
var_dump($userDataLoaded);
echo '<br>';

// Convert the string back into an array
$userDataLoaded = json_decode($userDataLoaded, true);
echo "User data decoded from JSON:\n";
var_dump($userDataLoaded);
echo '<br>';

// Update user data
$userDataLoaded['role'] = 'superadmin';
echo "User data updated role:\n";
var_dump($userDataLoaded);
echo '<br>';

// Save updated user data using file_put_contents
$userDataUpdatedString = json_encode($userDataLoaded);
echo "User data updated role encoded as JSON string:\n";
var_dump($userDataUpdatedString);
echo '<br>';
file_put_contents('user.txt', $userDataUpdatedString);

echo "User data saved, loaded and updated successfully.";
?>
</pre>