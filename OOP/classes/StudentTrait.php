<?php

trait StudentTrait
{
    public $fristName;
    public $lastName;
    public $age;
    public $address;
    public $grade;
    public $department;

    public function getStudentData()
    {
        return $this->fristName . ' - ' . $this->lastName . ' - ' . $this->age . ' - '
            . $this->address . ' - ' . $this->grade . ' - ' . $this->department;
    }

    public function test()
    {
        echo 'test StudentTrait method';
    }


}