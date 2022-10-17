<?php

abstract class Participant {
}

class Student extends Participant {
    public static $angajatorPublic = 'eMAG';

    public static function getAngajatorPublic()
    {
        return self::$angajatorPublic;
    }
}

class Teacher extends Participant {
}

var_dump(Student::$angajatorPublic);
var_dump(Student::getAngajatorPublic());
