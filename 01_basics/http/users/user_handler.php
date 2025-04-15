<?php
session_start();

$login = $_POST['login'] ?? 'default';
$password = $_POST['password'] ?? 'default';

$users = require 'users.php';

foreach ($users as $user) {
    if ($user['login'] == $login && $user['password'] == $password) {
        $_SESSION['name'] = $user['name'];
        header('Location: profile.php');
        break;
    }
}

