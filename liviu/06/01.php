<?php

echo "Hello";

$mesaj = "Miruna, Gabi si Liviu";
echo "\n<br>Hello " . $mesaj;
echo "\n<br>Miruna", " Gabi", " Liviu";
print "\n<br>Hello " . $mesaj;

echo "\n<br>";
var_dump($mesaj);

$nota = '10';
echo "\n<br>";
var_dump($nota);

$nota = 10;
echo "\n<br>";
var_dump($nota);

$nota = 10.0;
echo "\n<br>";
var_dump($nota);

$admis = true;
$respins = false;
echo "\n<br>";
var_dump($admis, $respins);

$note = array(9, 10, 9.0, 10);
echo "\n<br>";
var_dump($note);

$nul = null;
echo "\n<br>";
var_dump($nul);

echo "\n<br>";
$mesaj = 'Upgrade 2022';
echo 'Mesajul este: ' . $mesaj . ' lumgimea este: ' . strlen($mesaj);

$nota = 10.0;
echo "\n<br>";
var_dump($nota);
$nota = (int)$nota;
var_dump($nota);

$nota = 10.2;
echo "\n<br>";
var_dump($nota);
$nota = (int)$nota;
var_dump($nota);

echo "\n<br>";
$pi = pi();
var_dump($pi);
var_dump(min(1, -2, 7, 10));
var_dump(max(1, -2, 7, 10));
var_dump(abs(-5));
var_dump(abs(5));
var_dump(sqrt(64));
var_dump(round(0.60));
var_dump(round(0.49));
var_dump(rand());
var_dump(rand(10, 100));

$nota = 9;
echo "\n<br>";
var_dump($nota);
$nota = 10;
var_dump($nota);

define('NOTA', 9.5);
var_dump(NOTA, nota);
define('NOTA', 9.6, true);
var_dump(NOTA, nota);
