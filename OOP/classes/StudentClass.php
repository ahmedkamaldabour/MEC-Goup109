<?php

include 'HumanClass.php';
include 'StudentTrait.php';
include 'TestTrait.php';
include 'TestInterface.php';
include 'HiInterface.php';

class StudentClass extends HumanClass implements TestInterface , HiInterface
{
    use StudentTrait;
    public function __construct($firstName, $lastName, $age, $address, $grade, $department)
    {
        $this->fristName = $firstName;
        $this->lastName = $lastName;
        $this->age = $age;
        $this->address = $address;
        $this->grade = $grade;
        $this->department = $department;
    }

    public function greet()
    {
        echo 'hello student';
    }

    public function test2()
    {
        // TODO: Implement test2() method.
    }

    public function test3()
    {
        // TODO: Implement test3() method.
    }

    public function sayHi()
    {
        // TODO: Implement sayHi() method.
    }

    public function overide()
    {
        echo "this is student class method";
    }
}


$studentObject = new StudentClass('test', 'test', 15, 'test address', 90, 'IT');

echo $studentObject->getStudentData();