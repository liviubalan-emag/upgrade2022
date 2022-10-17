<?php

abstract class Participant {
    abstract function getAgeInterval();

    function getDate() {
        return '2022-10-14';
    }
}

interface Programmer {
    public function coding();
}

interface Gaming {
    public function play();
}

class Student extends Participant implements Programmer, Gaming {
    public function getAgeInterval()
    {
        return '20+';
    }

    public function coding()
    {
        var_dump('PHP');
    }

    public function play()
    {
        var_dump('League of legends');
    }
}

class Teacher extends Participant {
    public function getAgeInterval()
    {
        return '30+';
    }
}

//$miruna = new Participant(); // Error!!
$miruna = new Student();
$gabi = new Student();
$liviu = new Teacher();

var_dump($miruna->getAgeInterval());
var_dump($gabi->getAgeInterval());
var_dump($liviu->getAgeInterval());

echo "<br>\n";
$miruna->coding();
$gabi->coding();

echo "<br>\n";
$miruna->play();
$gabi->play();
