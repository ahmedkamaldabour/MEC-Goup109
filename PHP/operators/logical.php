<?php


// && - ||

$test1 = 5 == 5 ; // true

$test2 = 10 == 10 ; // true

$test3 = 5 == 10 ; // false

//echo $test3 && $test1 && $test2  ; // is test and test2 == ture or not
// to return true form $$
// the all of them should be true

//echo  $test3 || $test1 || $test2 ; // is test or test2 == ture or
// to return true form ||
// one of them should be true

//+=
//$a = 5 ;
//$a += 10; // $a = $a + 10
//echo $a ;

$a = 2;
$b = 3;
$b = ($a += ($b **= 5)); // $b = 3 ^ 5 = 243 , $a = 2 + 243 = 245
echo "\$b = ".$b;