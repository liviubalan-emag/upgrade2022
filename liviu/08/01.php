<?php

// Functions

//declare(strict_types=1);

function hello() {
    echo "\n<br>";
    echo 'Hello world from Ugrade 2022';
}
hello();
hello();
Hello();


function hello2($name) {
    echo "\n<br>";
    echo "Hello $name from Ugrade 2022";
}
hello2('Miruna, Gabi si Liviu');
hello2(2022);


function add(int $a, int $b) {
    echo "\n<br>";
    echo $a + $b;
}
add(1, 2);


function add2(int $a, int $b) {
    return $a + $b;
}
$result = add2(1, 2);
var_dump($result);
var_dump(add2(1, 2));
var_dump(add2(1.2, 2.0));


function add3(int $a, int $b = 0) {
    return $a + $b;
}
echo "\n<br>";
var_dump(add3(1, 2));
var_dump(add3(1));
//var_dump(add3()); // Error


function add4(int $a, int $b): float {
    return ($a + $b) * 0.1;
}
echo "\n<br>";
var_dump(add4(1, 2));


function add5(&$a) {
    $a += 5;
}
$a = 5;
add5($a);
echo "\n<br>";
var_dump($a);



// Array
$name_1 = 'Miruna';
$name_2 = 'Gabi';
$name_3 = 'Liviu';
echo "\n<br>";
var_dump($name_1);
var_dump($name_2);
var_dump($name_3);

$name = array('Miruna', 'Gabi', 'Liviu', 'Adelina');
echo "\n<br>";
var_dump($name);
var_dump($name[0], $name[1], $name[2]);
echo "\n<br>";
for ($i = 0; $i <= 2; $i++) {
    var_dump($name[$i]);
}
echo "\n<br>";
for ($i = 0; $i <= count($name)-1; $i++) {
    var_dump($name[$i]);
}

echo "\n<br>";
foreach ($name as $current_name) {
    var_dump($current_name);
}

echo "\n<br>";
foreach ($name as $key => $value) {
    var_dump($key, $value);
    echo ', ';
}

$name = array(
    'Miruna' => 25,
    'Gabi' => 26,
    'Liviu' => 37,
    'Adelina' => 25,
);
echo "\n<br>";
var_dump($name);
var_dump($name['Miruna']);
echo "\n<br>";
foreach ($name as $key => $value) {
    var_dump($key, $value);
    echo ', ';
}

echo "\n<br>";
$name = array(
    array('Miruna', 25, 'negru'),
    array('Gabi', 26, 'burgundy'),
    array('Liviu', 37, 'negru'),
    array('Adelina', 25, 'roz'),
    array('Frederica', 30, 'verde'),
);
var_dump($name);
var_dump($name[1][1]);
var_dump($name[3][2]);

echo "\n<br>";
foreach ($name as $line) {
    foreach($line as $cell) {
        echo "$cell, ";
    }
    echo "\n<br>";
}

$name = array(
    'Miruna' => 25,
    'Gabi' => 26,
    'Liviu' => 37,
    'Adelina' => 25,
);
echo "\n<br>";
var_dump($name);
sort($name);
echo "\n<br>";
var_dump($name);
echo "\n<br>";
rsort($name);
var_dump($name);

$name = array(
    'Miruna' => 25,
    'Gabi' => 26,
    'Liviu' => 37,
    'Adelina' => 25,
);
echo "\n<br>";
asort($name);
var_dump($name);
ksort($name);
echo "\n<br>";
var_dump($name);
krsort($name);
echo "\n<br>";
var_dump($name);

$global_name = 'Miruna';
var_dump($GLOBALS['global_name']);

function get_name() {
    $local_name = 'Gabi';
    global $global_name;
    var_dump($global_name);
    var_dump($GLOBALS['global_name']);
    var_dump($local_name);
    var_dump($GLOBALS);
}
var_dump($global_name);
var_dump($local_name);
get_name();
