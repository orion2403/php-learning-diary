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

function updateProfile(&$profile, $name = null, $email = null)
{
    if (!empty($name)) {
        $profile['name'] = $name;
    }

    if (!empty($email)) {
        $profile['email'] = $email;
    }
}

$profile = [
    'name' => 'John',
    'email' => 'john@example.com'
];

updateProfile($profile, 'Mike');

function validateLogin($username, $minLength = 5)
{
    if (empty($username)) {
        return 'Empty username';
    }
    return (mb_strlen($username) < $minLength) ? 'Too short' : 'Valid login';
}

function atm(&$balance, $amount, $operation)
{
    if ($operation == 'withdraw' && $amount > $balance) {
        return 'Insufficient funds';
    }

    switch ($operation) {
        case 'deposit':
            $balance += $amount;
            break;
        case 'withdraw':
            $balance -= $amount;
            break;
        default:
            return 'Invalid operation';
    }

    return "Balance updated: $balance";
}

function checkAge($age, $requiredAge = 18)
{
    return ($age < $requiredAge)
        ? 'Too young'
        : (($age == $requiredAge) ? 'Just enough' : 'Welcome');
}

function repeatString($str, $times)
{
    if ($times <= 0) {
        return '';
    }
    return $str . repeatString($str, --$times);
}