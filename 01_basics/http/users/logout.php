<?php

session_start();
unset($_SESSION['name']);
header("Location: sign-up.html");
