<?php

class StudentClass
{
    public $fristName;
    public $lastName;
    public $age;
    public $address;
    public $grade;
    public $department;

    public function __construct($firstName , $lastName , $age , $address , $grade , $department)
    {
        $this->fristName = $firstName;
        $this->lastName = $lastName;
        $this->age = $age;
        $this->address = $address;
        $this->grade = $grade;
        $this->department = $department;
    }

    public function getStudentData()
    {
        return $this->fristName . ' - ' . $this->lastName . ' - ' . $this->age . ' - ' . $this->address . ' - ' . $this->grade . ' - ' . $this->department;
    }
}


$studentObject = new StudentClass('test' , 'test' , 15 , 'test address' , 90 , 'IT');

echo $studentObject->getStudentData();