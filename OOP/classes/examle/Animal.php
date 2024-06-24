<?php

interface Animal
{
    public function sound();
}

class Cat implements Animal
{
    public function sound()
    {
        echo 'Meow';
    }
}

class Dog implements Animal
{
    public function sound()
    {
        echo 'Woof';
    }
}

class Cow implements Animal
{
    public function sound()
    {
        echo 'Moo';
    }
}

class Rabbit implements Animal
{
    public function sound()
    {
        echo 'Squeak';
    }
}

$animals = [
    new Cat(),
    new Dog(),
    new Cow(),
    new Rabbit()
];

foreach ($animals as $animal) {
    $animal->sound();
    echo '<br>';
}
