<?php

$db = require "db.php";

$title = $_POST['title'];
$body = $_POST['body'];

$post = mysqli_query($db, "INSERT INTO `posts` (`id`, `title`, `body`, `date`) VALUES (NULL, '$title', '$body', NOW())");

if (!$post) {
    die("Creation user error");
}

die("Post published");
