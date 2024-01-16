<?php

session_start();

require_once '../../vendor/autoload.php';
require_once 'include/database/posts.php'; // Assuming Posts.php contains your database connection and methods

$loader = new \Twig\Loader\FilesystemLoader('./templates');
$twig = new \Twig\Environment($loader);

$posts = new Posts();
$latestPosts = $posts->getLatestPosts(); // Assuming getLatestPosts() is a method that fetches the latest posts from the database

echo $twig->render('index.html', ['posts' => $latestPosts]);