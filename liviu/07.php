<?php

$a = 10;
$b = 6;

var_dump(
    $a + $b,
    $a - $b,
    $a * $b,
    $a / $b,
    $a % $b,
    $a ** $b
);

echo "\n<br>";
$a = $a + 1;
var_dump($a);

$a += 1; // echivalent cu $a = $a + 1;
var_dump($a);

$a -= 2;
var_dump($a);

echo "\n<br>";
var_dump(1 == 2);
var_dump(1 == 1);
var_dump(1 == '1');
var_dump(1 === 2);
var_dump(1 === 1);
var_dump(1 === '1');
var_dump(1 != 2);
var_dump(1 != 1);
var_dump(1 !== '1');
var_dump(9, 9.0, 9 === 9.0);
var_dump(1 < 2);
var_dump(1 < 1);
var_dump(1 <= 1);

echo "\n<br>";
$a = 2;
var_dump($a++);
var_dump($a);

$a = 2;
var_dump(++$a);
var_dump($a);

echo "\n<br>";
var_dump(1 == 1.0);
var_dump(1 == 2);
// true || false == true
var_dump(1 == 1.0 || 1 == 2);
var_dump(1 == 2 || 1 == 1.0);
var_dump(false || false);
var_dump(false && false);
var_dump(true && true);
var_dump(!true);
var_dump(!false);

echo "\n<br>";
var_dump('Hello' . 'Miruna, Gabi si Liviu');
$mesaj = 'Hello';
$mesaj .= 'Miruna, Gabi si Liviu';
var_dump($mesaj);

echo "\n<br>";
$tip_user = 'not genius';
if ($tip_user == 'genius') {
    echo 'Userul este genius';
} elseif ($tip_user == 'genius trial') {
    echo 'User genius in varianta trial';
} else {
    echo 'Userul nu este genius.';
    echo 'Incearca un trial si vezi daca e ok.';
}

echo "\n<br>";
$tip_user = 'genius';
switch ($tip_user) {
    case 'genius':
        echo 'Userul este genius';
        break;
    case 'genius trial':
        echo 'User genius in varianta trial';
        break;
    default:
        echo 'Userul nu este genius.';
        echo 'Incearca un trial si vezi daca e ok.';
}

echo "\n<br>";
$i = 0;
while ($i <= 10) {
    echo $i . ', ';
//    $i++;
    $i += 2;
}

$i = 10;
while ($i >= 0) {
    echo $i . ', ';
    $i -= 2;
}

echo "\n<br>";
$i = 0;
do {
    echo $i . ', ';
    $i++;
} while ($i <= 10);

echo "\n<br>";
for ($i = 0; $i <= 10; $i++) {
    echo $i . ', ';
}

echo "\n<br>";
for ($i = 0; $i <= 10; $i++) {
    if ($i == 2) {
        continue;
    }
    if ($i == 4) {
        break;
    }
    echo $i . ', ';
}

echo "\n<br>";
$tip_user = 'not genius';
$mesaj = $tip_user == 'genius' ? 'Userul este genius' : 'Userul nu este genius. Incearca un trial si vezi daca e ok.';
var_dump($mesaj);
