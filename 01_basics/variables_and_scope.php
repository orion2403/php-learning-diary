<?php

/*
 *  Variables and scopes
 */

// case-sensitive
$var = 'Bob';
$Var = 'Tom';

// by value
$a = 12;
$b = $a;
$b = 20;
//a = 12, b = 20

// by reference
$foo = 'Bob';
$bar = &$foo;

$bar = 'Tom';
// bar = Tom, foo = Bob
echo $foo;
?>

<?php

// variable variables
$a = 'hello'; // => $a have value: hello
$$a = 'world'; // => $hello = 'world'

$a = 'name';
$$a = 'Tembulat';

echo $name;
echo $$a;


$Bar = "a";
$Foo = "Bar";
$World = "Foo";
$Hello = "World";
$a = "Hello";

$a; //Returns Hello
$$a; //Returns World
$$$a; //Returns Foo
$$$$a; //Returns Bar
$$$$$a; //Returns a

$$$$$$a; //Returns Hello
$$$$$$$a; //Returns World
?>

<?php

// scopes

$a = 1;
$b = 2;

function Sum()
{
    global $a, $b;

    $b = $a + $b;
}

Sum();
echo $b;
?>

<?php
$a = 1;
$b = 2;

function Sum1()
{
    $GLOBALS['b'] = $GLOBALS['a'] + $GLOBALS['b'];
}

Sum1();
echo $b;

?>

<?php

function test()
{
    static $a = 0;
    echo $a;
    $a++;
}

?>

    <!--    !--Tasks-->-->

<?php
/*
 * Create variable $name with your name. Use function define() or const, create
 * variable GREETING with value 'Hello!'. Print (e.x 'Hello, Alex!'), use echo, concat
 */

$name = 'Peter';

//define('GREETING', 'Hello');
const GREETING = 'Hello';

echo GREETING . ', ' . $name . '!';

?>

<?php
$animals = ['dog', 'cat', 'cow'];

// $$animals[1] = 'some';

// ${$animals[1]}

//$var = $animals[0];
//$$var = 'woof';

${$animals[0]} = "woof";
${$animals[1]} = "meow";
${$animals[2]} = "moo";

echo "dog says: $dog\n";
echo "cat says: $cat\n";
echo "cow says: $cow\n";

?>

<?php

$arr = ['first', 'second', 'third'];
${$arr[0]} = '0';
${$arr[1]} = '1';
${$arr[2]} = '2';

echo ${$arr[0]}; // $first
echo ${$arr[1]}; // $second
echo ${$arr[2]}; // $third

?>

<?php
$fruits = ['apple', 'banana', 'cherry'];

$apple = 'green';
$banana = 'yellow';
$cherry = 'red';

$colors = [
    $fruits[0] => ${$fruits[0]},
    $fruits[1] => ${$fruits[1]},
    $fruits[2] => ${$fruits[2]}
];

print_r($colors);
?>