<?php

interface TestInterface
{
    public function test();
}

abstract class TestParentClass
{
    public function test()
    {
        echo 'test parent class method';
    }
}

trait TestTrait
{
    public function test()
    {
        echo 'test trait method';
    }
}

trait TestTrait2
{
    public function test()
    {
        echo 'test trait2 method';
    }
}



class TestClass extends TestParentClass implements TestInterface
{
    use TestTrait;
    use TestTrait2{
        TestTrait::test insteadof TestTrait2;
        TestTrait2::test as TraitTestTwo;
    }

}

$test = new TestClass();
$test->TraitTestTwo();