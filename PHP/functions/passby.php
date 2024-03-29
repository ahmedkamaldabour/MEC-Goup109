<?php


$belal = 90 ;

$ali = &$belal ;

$ali = 10 ;

echo $belal ;
echo "\n" ;
echo $ali;



//function sum_two_numbers($x , $y){
//    return $x + $y ;
//}
//
//// pass by value 
//
//$num = 10 ;
//$num2 = 20 ;
//echo sum_two_numbers($num , $num2);


function sum_two_numbers(&$x , &$y){
    $x += 5 ;
    $y += 10 ;
    return $x + $y ;
}

// pass by ref

$num = 10 ;
$num2 = 20 ;

//echo $num ;
//echo "\n";
//echo $num2;
//echo "\n";
//echo sum_two_numbers($num , $num2);
//echo "\n ==== \n";
//echo $num ;
//echo "\n";
//echo $num2;
//echo "\n";