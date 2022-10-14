<?php

class Participant {
    // Properties
    public $name;

    // Methods
    function __construct() {
        $this->name = 'N/A';
    }

    function get_date() {
        return '2022-10-14';
    }

    function get_name() {
        return $this->name;
    }
}
$miruna = new Participant();
var_dump($miruna->namePublic);
