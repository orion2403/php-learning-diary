<?php

$db = mysqli_connect('localhost', 'root', 'yota2016-D', 'hw-db');

if (!$db) {
    die('Connection to database error');
}

$product_name = $_POST['name'];
$description = $_POST['description'];
$categoryId = $_POST['category_id'];
$price = $_POST['price'];

$isAdd = mysqli_query($db, "INSERT INTO `products` (`id`, `name`, `description`, `category_id`, `price`) VALUES (NULL, '$product_name', '$description', '$categoryId', '$price')");

if (!$isAdd) {
    die('Product added failed');
} else {
    header('Location: products-form.html');
}
