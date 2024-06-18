<?php
session_start();

require '../../../vendor/autoload.php';
require '../include/database/posts.php'; // Assuming Posts.php contains your database connection and methods

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
    $content = $_POST['content'];

    $posts = new Posts();
    $postId = $posts->create($title, $content, $_SESSION['user_id']); // Assuming user_id is stored in session

    if ($postId) {
        header('Location: /twig/index.php'); // Redirect to the index page
        exit();
    } else {
        echo "Error: Could not create post";
    }
} else {
    header('Location: /twig/index.php'); // Redirect to the index page if not a POST request
    exit();
}