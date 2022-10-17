<?php

abstract class Participant {
}

trait Programmer {
    public function coding() {
        return 'PHP';
    }
}

trait Gaming {
    public function play() {
        var_dump('League of legends');
    }
}

class Student extends Participant {
    use Programmer;
    use Gaming;
}

class Teacher extends Participant {
}

$miruna = new Student();
$gabi = new Student();
$liviu = new Teacher();

var_dump($miruna->coding());
$gabi->play();
