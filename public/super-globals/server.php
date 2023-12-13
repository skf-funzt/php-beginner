<?php 
// Display the client's IP address
$clientIP = $_SERVER['REMOTE_ADDR'];
echo "Client IP Address: " . $clientIP . "<br>";

// Display the server's hostname
$serverHostname = $_SERVER['SERVER_NAME'];
echo "Server Hostname: " . $serverHostname . "<br>";

// Display the request method (GET, POST, etc.)
$requestMethod = $_SERVER['REQUEST_METHOD'];
echo "Request Method: " . $requestMethod . "<br>";

// Display the current script filename
$scriptFilename = $_SERVER['SCRIPT_FILENAME'];
echo "Script Filename: " . $scriptFilename . "<br>";

// Display the user agent string
$userAgent = $_SERVER['HTTP_USER_AGENT'];
echo "User Agent: " . $userAgent . "<br>";
?>