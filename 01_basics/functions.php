<?php

function canAccess($age)
{
    return ($age > 18) ? 'Access granted' : 'Access denied';
}

function calculate($a, $b, $operation)
{
    return match ($operation) {
        '+' => $a + $b,
        '-' => $a - $b,
        '*' => $a * $b,
        '/' => $a / $b,
        default => 'Invalid operation'
    };
}

function checkLogin($username)
{
    if (empty($username)) {
        return 'No username';
    } else if ($username == 'admin') {
        return 'Welcome, admin';
    } else {
        return "Hello, $username";
    }
}

function isEven($number)
{
    return ($number % 2 == 0) ? 'Even' : 'Odd';
}

function maxOfTwo($a, $b)
{
    return ($a > $b) ? $a : $b;
}