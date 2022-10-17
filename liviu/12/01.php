<?php

class Participant {
    // Properties
    public $namePublic;
    protected $nameProtected;
    private $namePrivate;

    // Constants
    const ANGAJATOR = 'eMAG';

    // Methods
    function __construct($namePublic, $nameProtected, $namePrivate) {
        $this->namePublic = $namePublic;
        $this->nameProtected = $nameProtected;
        $this->namePrivate = $namePrivate;
    }

    function getDate() {
        return '2022-10-14';
    }

    public function getNamePublic() {
        return $this->namePublic;
    }

    function getNameProtected() {
        return $this->nameProtected;
    }

    function getNamePrivate() {
        return $this->namePrivate;
    }
}

class Student extends Participant {
    private $studentNamePrivate = 'Student';

    function getDate() {
        return '2022-10-17';
    }

    public function getStudentNameProtected()
    {
        return $this->nameProtected;
    }

    public function getStudentNamePrivate()
    {
        return $this->namePrivate;
    }

    public function getStudentNamePrivateLocal()
    {
        return $this->studentNamePrivate;
    }
}

class Teacher extends Participant {
}

$miruna = new Participant('Miruna (public)', 'Miruna (protected)', 'Miruna (private)');
var_dump($miruna->namePublic);
//var_dump($miruna->nameProtected); // Errror!!
//var_dump($miruna->namePrivate); // Error!!

var_dump($miruna->getNamePublic());
var_dump($miruna->getNameProtected());
var_dump($miruna->getNamePrivate());


echo "<br>\n";
$gabi = new Student('Gabi (public)', 'Gabi (protected)', 'Gabi (private)');
var_dump($gabi->namePublic);
//var_dump($gabi->nameProtected); // Errror!!
//var_dump($gabi->namePrivate); // Error!!

var_dump($gabi->getNamePublic());
var_dump($gabi->getNameProtected());
var_dump($gabi->getNamePrivate());


echo "<br>\n";
$liviu = new Teacher('Liviu (public)', 'Liviu (protected)', 'Liviu (private)');
var_dump($liviu->namePublic);
//var_dump($liviu->nameProtected); // Errror!!
//var_dump($liviu->namePrivate); // Error!!

var_dump($liviu->getNamePublic());
var_dump($liviu->getNameProtected());
var_dump($liviu->getNamePrivate());


echo "<br>\n";
var_dump($miruna->namePublic);
var_dump($gabi->namePublic);
var_dump($liviu->namePublic);
echo "<br>\n";
var_dump($miruna->getNamePublic());
var_dump($gabi->getNamePublic());
var_dump($liviu->getNamePublic());

//echo "<br>\n";
//var_dump($miruna->nameProtected); // Error!!
echo "<br>\n";
var_dump($miruna->getNameProtected());
var_dump($gabi->getNameProtected());
var_dump($gabi->getStudentNameProtected());

echo "<br>\n";
//var_dump($miruna->namePrivate); // Error!!
var_dump($miruna->getNamePrivate());
var_dump($gabi->namePrivate); // NULL
var_dump($gabi->getStudentNamePrivate());
var_dump($gabi->getStudentNamePrivateLocal());

echo "<br>\n";
var_dump($miruna->getDate());
var_dump($gabi->getDate());

echo "<br>\n";
var_dump(Participant::ANGAJATOR);
var_dump(Student::ANGAJATOR);
