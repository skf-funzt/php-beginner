<?php
$header_before = headers_list();

// Remove a specific header
header_remove('X-Powered-By');

$header_after = headers_list();

// Check if headers have been sent
if (headers_sent()) {
  echo "Headers have already been sent.\n";
} else {
  echo "Headers have not been sent yet.\n";
}

echo "<pre>";

// List all headers before removing the Content-Type header
print("Headers before removing the Content-Type header:\n");
var_dump($header_before);

// List all headers after removing the Content-Type header
print("Headers after removing the Content-Type header:\n");
var_dump($header_after);

echo "</pre>";

?>