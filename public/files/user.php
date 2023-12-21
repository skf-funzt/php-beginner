
<?php
// User data
$username = 'JohnDoe';
$email = 'john@example.com';
$role = 'admin';

echo '<pre>';

// Convert the user data into a string
$userDataString = "Username: $username\nEmail: $email\nRole: $role";
echo "User data:\n$userDataString\n\n";

// Save user data using fwrite
$file = fopen('user.txt', 'w');
fwrite($file, $userDataString);
fclose($file);
echo "User data saved successfully.\n\n";

// Load user data using fread
$file = fopen('user.txt', 'r');
$size = filesize('user.txt');
$userDataLoaded = fread($file, $size);
fclose($file);
echo "User data loaded successfully:\n$userDataLoaded\n\n";

// Update user data
$userDataLoaded = str_replace('Role: admin', 'Role: superadmin', $userDataLoaded);

// Save updated user data using file_put_contents
file_put_contents('user2.txt', $userDataLoaded);
echo "User data updated successfully:\n$userDataLoaded\n\n";

// Load user data again using fread
$file = fopen('user2.txt', 'r');
$size = filesize('user2.txt');
$userDataLoadedAgain = fread($file, $size);
fclose($file);
echo "User data loaded again:\n$userDataLoadedAgain\n\n";

echo "Try to load the file despite it being deleted:\n";
echo '</pre>';

// Delete the file
exec('rm user.txt');

// Try to load the file despite it being deleted
$file = fopen('user.txt', 'r');
$size = filesize('user.txt');
$userDataLoaded = fread($file, $size);
fclose($file);
echo "User data loaded successfully:\n$userDataLoaded\n\n";
?>
