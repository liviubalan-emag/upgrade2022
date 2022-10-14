<?php

class Participant {
    // Properties
    public $name;

    // Methods
    function __construct($name) {
        $this->name = $name;
    }

    function get_date() {
        return '2022-10-14';
    }

    function get_name() {
        return $this->name;
    }

    function __destruct() {
        var_dump('Calling destructor.');
    }
}

$miruna = new Participant('Miruna');
var_dump($miruna->namePublic);
