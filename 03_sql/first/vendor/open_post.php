<?php

$db = require 'db.php';
$id = $_GET['id'];

$post = mysqli_query($db, "SELECT * FROM `posts` WHERE `id` = '$id'");
$post = mysqli_fetch_assoc($post);

?>

<h1>Title: <?=$post['title']?></h1>
<h3>Body: <?=$post['body']?></h3>
<h4>Date: <?=$post['date']?></h4>

