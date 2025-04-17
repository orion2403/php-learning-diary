<?php

$db = mysqli_connect('localhost', 'root', 'yota2016-D', 'first_db');

if (!$db) {
    die('Database connection error');
} else {
    return $db;
}
