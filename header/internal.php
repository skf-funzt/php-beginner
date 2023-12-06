<?php
echo "<pre>";

// Check if headers have been sent
if (headers_sent()) {
  echo "Headers have already been sent.\n";
} else {
  echo "Headers have not been sent yet.\n";
}

// List all headers
var_dump(headers_list());

// Remove a specific header
header_remove('Content-Type');

// List all headers
var_dump(headers_list());

echo "</pre>";

?>
