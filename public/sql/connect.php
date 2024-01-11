<?php

$mysqli = new mysqli("localhost:3306", "root", "mariadb", "mariadb");

echo "<pre>";
echo $mysqli->host_info . "\n";
echo $mysqli->client_info . "\n";
echo $mysqli->server_info . "\n";
echo "</pre>";
