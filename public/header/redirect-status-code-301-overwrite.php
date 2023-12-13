<?php
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $_SERVER['HTTP_HOST'] . "/header/status-code-301-overwrite.php");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HEADER, true);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_NOBODY, true);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    "User-Agent: PHP Example",
    "Accept: application/json"
));
$response = curl_exec($ch);
curl_close($ch);

// Print all headers
echo "<pre>";
var_dump($response);
echo "</pre>";
?>
