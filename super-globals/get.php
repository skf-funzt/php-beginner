<?php
// FILEPATH: /workspaces/php/super-globals/get.php

// Check if a name is provided in the query string
if (isset($_GET['name'])) {
    $name = $_GET['name'];
    echo "Hello, $name!";
} else {
    echo "Please provide a name in the query string.";
}

print("<pre>");
var_dump($_GET);
print("</pre>");
?>