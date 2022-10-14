<?php

class Participant {
    // Properties
    public $name;

    // Methods
    function get_date() {
        return '2022-10-14';
    }

    function get_name() {
        return $this->name;
    }
}

class AnotherParticipant {
}

$p = new Participant();
$p->namePublic = 'Miruna';
var_dump($p);
echo "<br>\n";

var_dump($p->namePublic);
var_dump($p->getDate());

echo "<br>\n";

$name = 'Miruna';
function get_date() {
    return '2022-10-14';
}
var_dump($name);
var_dump(get_date());

echo "<br>\n";
var_dump($p->getNamePublic());

echo "<br>\n";

$miruna = new Participant();
$miruna->namePublic = 'Miruna';
$gabi = new Participant();
$miruna->namePublic = 'Gabi'; // Gabi observation!!
var_dump($miruna->getNamePublic());
var_dump($gabi->getNamePublic());

echo "<br>\n";

$miruna = new Participant();
$miruna->namePublic = 'Miruna';
$gabi = new Participant();
$gabi->namePublic = 'Gabi';
var_dump($miruna->getNamePublic());
var_dump($gabi->getNamePublic());

echo "<br>\n";
var_dump($miruna instanceof Participant);
var_dump($gabi instanceof Participant);
var_dump($miruna instanceof AnotherParticipant);
var_dump($gabi instanceof AnotherParticipant);

$ap = new AnotherParticipant();
var_dump($ap instanceof Participant);
