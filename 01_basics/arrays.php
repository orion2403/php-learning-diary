<?php

$person = array(
    "name" => "Bob",
    "age" => "19",
    "city" => "Moscow"
);


$numbers = array(
    1, 2, 3, 4, 5, 20 => 6, 7, 8, 10 // 7 [21] ...
);

$size = count($numbers);

$arr = [
    1 => 'a',
    '1' => 'b',
    true => 'c',
    1.7 => 'd'
];

$sourceArray = ['foo', 'bar', 'baz'];
[$foo, $bar, $baz] = $sourceArray;
echo $foo;

$things = [2025, 'Bob', false];

$users = [
    [
        'id' => 1,
        'name' => 'Georgiy',
        'surname' => 'Mils',
        'age' => 19,
        'lang' => 'ru',
        'pets' => [
            'dog' => 2,
            'cat' => 1
        ]
    ],
    [
        'id' => 2,
        'name' => 'Killian',
        'surname' => 'Andersen',
        'age' => 56,
        'lang' => 'en',
        'pets' => [
            'rabbit' => 1,
            'cat' => 2
        ]
    ],
    [
        'id' => 3,
        'name' => 'Tom',
        'surname' => 'Cruz',
        'age' => 48,
        'lang' => 'en',
        'pets' => [
            'dog' => 1,
        ]
    ]
];

$settings = [
    'key' => 'amks21e21msdfdsfcx2',
    'ip' => '123.23.12.1',
    'ssl' => 'some',
    'db' => [
        'port' => 80,
        'host' => 'something',
        'login' => 'username123',
        'password' => 'ewfew21345rtfgdvsd'
    ]
];

$settings['db']['port'] = 3309;
