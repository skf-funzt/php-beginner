<?php
// Redirect with additional query parameters
$queryParams = array(
    'username' => 'CaptianObvious',
    'consent' => true
);
$queryString = http_build_query($queryParams);

// Get own URL
$host = $_SERVER['HTTP_HOST'];
$url = "http://" . $host . "/query/read.php";

// Redirect to own URL with additional query parameters
header("Location: " . $url . "?" . $queryString);
?>
