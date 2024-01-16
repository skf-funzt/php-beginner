<?php
require '../../vendor/autoload.php';
require './include/database/db.php';
require './include/database/users.php';

$loader = new \Twig\Loader\FilesystemLoader('./templates');
$twig = new \Twig\Environment($loader);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // TODO: Validate the name, email, and password
    // TODO: Check if a user with the same email already exists

    $user = new User();
    $user->create($name, $email, $password);

    header('Location: /twig/login.php');
} else {
    echo $twig->render('register.html');
}