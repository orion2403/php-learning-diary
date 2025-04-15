<?php

include 'products_form.php';

['product' => $name, 'category' => $category, 'price' => $price] = $_POST;

$content = "Product name: $name. Category: $category. Price: $price";
$file = fopen("products.txt", "w");

fwrite($file, $content);
fclose($file);