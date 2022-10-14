<?php

class Participant {
    // Properties
    public $namePublic;
    protected $nameProtected;
    private $namePrivate;

    // Methods
    function __construct($namePublic, $nameProtected, $namePrivate) {
        $this->namePublic = $namePublic;
        $this->nameProtected = $nameProtected;
        $this->namePrivate = $namePrivate;
    }

    function getDate() {
        return '2022-10-14';
    }

    function getNamePublic() {
        return $this->namePublic;
    }

    function getNameProtected() {
        return $this->nameProtected;
    }

    function getNamePrivate() {
        return $this->namePrivate;
    }

    function __destruct() {
        var_dump('Calling destructor.');
    }
}

$miruna = new Participant('Miruna (public)', 'Miruna (protected)', 'Miruna (private)');
var_dump($miruna->namePublic);
//var_dump($miruna->nameProtected); // Errror!!
//var_dump($miruna->namePrivate); // Error!!

var_dump($miruna->getNamePublic());
var_dump($miruna->getNameProtected());
var_dump($miruna->getNamePrivate());
