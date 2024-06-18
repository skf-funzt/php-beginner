<?php
session_start();

require_once 'include/database/users.php';

require '../../vendor/autoload.php';
$loader = new \Twig\Loader\FilesystemLoader('./templates');
$twig = new \Twig\Environment($loader);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $email = $_POST['email'];
  $password = $_POST['password'];

  $user = (new User())->findByEmail($email);

  if ($user && password_verify($password, $user['password'])) {
    $_SESSION['user_id'] = $user['id'];
    header('Location: /twig');
  } else {
    echo $twig->render('login.html', ['error' => 'Invalid email or password']);
  }
} else {
  echo $twig->render('login.html');
}