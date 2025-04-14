<?php

const LOGIN = 'admin';
const PASSWORD = 'admin';

$tmpLogin = 'admin';
$tmpPassword = 'admin123';

if ($tmpLogin == LOGIN && $tmpPassword != PASSWORD) {
    echo 'Check correct your password';
} else if ($tmpLogin != LOGIN) {
    echo 'User not found';
} else if ($tmpLogin == LOGIN && $tmpPassword == PASSWORD) {
    echo 'Auth success';
} else {
    echo 'Undefined';
}
?>

<?php

$isStatus = true;
$statusResult = ($isStatus) ? '43224656' : '98645623';

echo $statusResult;
?>

<?php

$typeCar = 'BMW';

if ($typeCar == 'BMW') {
    echo 'Selected is a very good car';
} else if ($typeCar == 'Toyota') {
    echo 'Toyota is very reliable car';
} else if ($typeCar == 'M') {
    echo 'Don\'t buy these cars!';
} else {
    echo 'Car not found';
}

?>

<?php

$offset = 3;
$start = 1;

switch (true) {
    case $start  - $start === 1:
        echo 'A';
        break;
    case $start - $offset == 2:
        echo 'B';
        break;
    case $start - $offset == 3:
        echo 'C';
        break;
    default:
        echo 'D';
}
?>

<?php

$food = '1';

$returnValue = match ($food) {
    'apple' => 'Apple is on a table',
    'orange' => 'Orange is on a table',
    'cake' => 'Cake is on a table',
    default => 'Hello'
};

var_dump($returnValue);
?>

<?php

$status = 'processing';

$result = match ($status) {
    'new' => 'new person',
    'processing' => 'in processing',
    'shipped' => 'sent',
    'delivered' => 'delivered',
    'cancelled' => 'cancel',
    default => 'error'
};

var_dump($result);

?>

<?php

$greeting = $name ?? 'defaultName';

echo $greeting;

$_POST = [
    'username' => null,
    'email' => 'test@example.com'
];

$user = $_POST['username'] ?? $_POST['email'] ?? 'anonymous';

echo $user;
