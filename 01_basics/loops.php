<?php

$posts = [
    [
        'id' => 1,
        'title' => 'Buy a new car',
        'date' => '04.03.2025',
        'status' => 'Done',
    ],
    [
        'id' => 2,
        'title' => 'Go to the movie',
        'date' => '25.04.2025',
        'status' => 'Planned'
    ],
    [
        'id' => 3,
        'title' => 'Join to the music club',
        'date' => '31.07.2025',
        'status' => 'Planned'
    ],
    [
        'id' => 4,
        'title' => 'Learn English',
        'date' => '31.04.2025',
        'status' => 'Planned'
    ]
];

// foreach loop
foreach ($posts as $post) {
    [
        'id' => $id,
        'title' => $title,
        'date' => $date,
        'status' => $status
    ] = $post;
    echo "<h3>Title: $title</h3>";
    echo "<p>Id: $id</p>";
    echo "<p>Date: $date</p>";
    echo "<p>Status: $status</p>";
}

// for loop
for ($i = 0; $i < count($post); $i++) {
    print_r($posts[$i]);
}

// while loop
$index = 0;
while ($index < count($posts)) {
    print_r($posts[$index]);
    $index++;
}