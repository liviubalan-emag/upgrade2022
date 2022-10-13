<?php

//1
$nota = 7;
var_dump($nota);

//2
$nota = 7.7;
echo "\n<br>";
var_dump($nota);

//3
$nota = '7';
echo "\n<br>";
var_dump($nota);

//4
echo "\n<br>";
var_dump(7 == 7.7); // o sa afiseze bool(false) pentru ca 7 nu este egal cu 7.7
var_dump(7 < 7.7); // o sa afiseze bool(true) pentru ca 7 este mai mic decat 7.7
var_dump(7 <= 7.7); // o sa afiseze bool(true) pentru ca 7 este mai mic sau egal 7.7

//5
$nume = 'Coman';
$prenume = "Miruna";
echo "\n<br>";
var_dump($prenume . " " . $nume);

//6
$nume = 'Coman';
$prenume = "Miruna";
echo "\n<br>";
echo "$prenume $nume are nota $nota"; // "Miruna Coman are nota 7" -Mesajul a fost afisat cu succes.

//7
$utilizator1 = 9.2;
$utilizator2 = 8.6;
$utilizator3 = 5.3;
echo "\n<br>";
echo (min(9.2, 8.6, 5.3));
echo "\n<br>"; // or
echo (max($utilizator1, $utilizator2, $utilizator3));
echo "\n<br>";
echo (sqrt(9.2));
echo "\n<br>";
echo (round(5.3));

//8
define("NOTA", "NOTA");
echo "\n<br>";
echo NOTA;

//9
define("NOTA", "NOTA", true); // daca nu este trecut "true", se va afisa "nota".
echo "\n<br>";
echo nota;

//10
echo "\n<br>";
define("NOTE", "De trecere!"); //o constanta nu merge redefinita, daca lasam tot valoarea "NOTA" o prelua pe cea de mai sus in loc sa afiseze "De trecere!".
echo NOTE;





?>