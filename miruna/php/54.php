<?php

//2
function show() {
    echo "\n<br>";
    echo "Hello world";
}
show();

//3
function show2($message) {
    echo "\n<br>";
    echo "Hello Upgrade 2022";
}
show2("Hello Upgrade 2022");

//4
function show3($message) {
    echo "\n<br>";
    $info = "my message";
    $message = $info;
    echo "Hello $message from here";
}
show3($message);

//5
function add(int $number = 2) {
    echo "\n<br>";
    return $number**3;
}
var_dump(add(2));

//6
function add2(&$number) {
    $number += 2;
}
$a = 5;
add2($a);
echo "\n<br>";
echo $a;

//7
$name = array ('Miruna', 'Gabi', 'Liviu', 'Adelina');

echo "\n<br>";
for ($i = 0; $i <= 3; $i++) {
    var_dump($name[$i]);
}

echo "\n<br>";
foreach ($name as $key => $value) {
    var_dump($key, $value);
    echo ', ';
}

//8
echo "\n<br>";
sort($name);
$clength = count($name);
for($x = 0; $x < $clength; $x++) {
    echo $name[$x];
    echo " ";
}

//9
echo "\n<br>";
echo "\n<br>";
$name = array(
    array('Miruna', 25, 'negru', 'Technical Support Specialist'),
    array('Gabi', 26, 'burgundy', 'Content Production Support'),
    array('Liviu', 37, 'negru', 'PHP Developer'),
    array('Adelina', 25, 'roz', 'Marketplace Support Expert'),
);
var_dump($name);

echo "\n<br>";
for ($i = 0; $i <= 3; $i++) {
    var_dump($name[$i]);
}

echo "\n<br>";
foreach ($name as $line) {
    foreach ($line as $element) {
        echo "$element, ";
    }
    echo "\n<br>";
}

//10
echo "\n<br>";
$global_name = 'Liviu'; //este o variabilă super globală PHP care este folosită pentru a accesa variabile globale de oriunde în scriptul PHP (și din cadrul funcțiilor sau metodelor)

function get_name () {
    $local_name = 'Miruna';
    global  $global_name;
    var_dump($global_name);
    var_dump($GLOBALS['global_name']);
    var_dump($local_name);
    var_dump($GLOBALS);
}
var_dump($global_name);
var_dump($local_name);
get_name();

?>