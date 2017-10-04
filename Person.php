<?php

class Person
{
    private $name;
    private $age;
    private $height;
    private $gender;

    //setter getter

    public function setName($n) {
        $this->name = $n;
    }

    public function getName() {
    return $this->name;
    }

    public function setAge($a) {
       $this->age = $a;
    }

    public function getAge() {
        return $this->age;
    }

    function setHeight($h) {
        $this->height = $h;
    }

    function getHeight() {
       return $this->height;
    }

    function setGender($g) {
        $this->gender = $g;
    }

    function getGender() {
        return $this->gender;
    }
}





?>