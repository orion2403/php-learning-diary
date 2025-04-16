<?php

$fileType = $_FILES['image']['type'];

if ($fileType !== 'image/jpeg' && $fileType !== 'image/png') {
    header('Location: upload_file.html');
}

$saveDir = 'upload/' . time() . '_' . basename($_FILES['image']['name']);
$tmp_name = $_FILES['image']['tmp_name'];

if (move_uploaded_file($tmp_name, $saveDir)) {
    echo "File success uploaded";
}