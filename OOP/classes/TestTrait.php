<?php


class TestParentClass
{
    public function test()
    {
        echo 'test class method';
    }

}
class TestClass extends TestParentClass
{
    use TestTrait;
}
trait TestTrait
{
    public function test()
    {
        echo 'test trait method';
    }
}


$test = new TestClass();
$test->test();
