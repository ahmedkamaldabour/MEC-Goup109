<?php


$number = 100 ;
function foo()
{
    global $number ;
    $number = 10 ;
    echo $number . "\n";
}
foo(); //Will print 10 because text defined inside function is a local variable

echo $number ;


//
//$mohamed = 100 ;
//
//function test()
//{
//    global $mohamed;
//    echo $mohamed ;
//}
//
//test();
