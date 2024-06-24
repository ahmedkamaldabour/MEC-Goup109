<?php

//declare(strict_types=1);

// comments
 // 1- //
 // 2- #
// 3- /* */

/* type juggling
 and type casting in PHP
*/

//// type juggling
//$var = "10";
//$new_var = $var + 10;
//echo $new_var; // 20

// type casting
//$var = "10";
//$var = (int)$var ; // int + int
//echo gettype($var);
//echo $var; // 20
//echo "\n";



//$varOne = 5 + 3 ; // int + int
//echo $varOne; // int
//echo gettype($varOne);
//echo "\n";

//$num1 = 5 ;
//$num2 = "3 numbers" ;
//$varTwo = $num1 + $num2 ; // int + string
//echo $varTwo ; // int
//echo gettype($num2);
//echo "\n";
//
//echo gettype($varTwo);
//
//echo "\n";


//$varOne = 5 + 3.5 ; // int + double
//echo $varOne; // --- double
//echo gettype($varOne);
//echo "\n";

//$varOne = "5 numbers" + "3 numberts" ; // string + string
//echo $varOne; // --- int
//echo gettype($varOne);
//echo "\n";


// variable variable

//$string = "group109" ;
//
//$$string = "new_group109";
//
//echo $string;
//echo "\n" ;
//echo $group109;
//echo "\n" ;


// const

//const PI = 3.14;
//echo PI ;
echo "\n" ;
////PI = 3.15 ;
////echo PI ;
////echo "\n" ;
//
//define('PI2', 3.15);
//
//echo PI2 ;

// naming convention in php Variable
// 1- $name
// 2- $name1
// 3- $name_1

// $5name = "name" ; // invalid
// $name5 = "name" ; // valid
// $_name = "name" ; // valid

// content twoString.php
// camelCase
$firstName = "Ahmed" ;
// snake_case
$first_name = "Ahmed" ;
// PascalCase
$FirstName = "Ahmed" ;

$age = 20 ;
$first_name = "Ahmed" ;
