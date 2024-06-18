<?php
require '../../../vendor/autoload.php';
$loader = new \Twig\Loader\FilesystemLoader('./');
$twig = new \Twig\Environment($loader);

$pdo = require './db.php';

$stmt = $pdo->prepare("SELECT id, name, email FROM users");
$stmt->execute();
$users = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo $twig->render('users.html', ['users' => $users]);