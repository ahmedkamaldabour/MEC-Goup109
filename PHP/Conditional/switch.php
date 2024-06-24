<?php

//$x = 10; //change value of x to see output for different cases
//
//switch ($x) {
//  case 1: //is x=1?
//    echo "Your value for case 1 is $x";
//    break;
//  case 2: //is x=2?
//    echo "Your value for case 2 is $x";
//    break;
//  default: //executed if neither case 1 nor case 2 are executed
//    echo "Your value in default case is $x";
//    break;
//}

// x=2, y=1, and z=3

$x = 1; // 1
$y = 2; // 4
$z = 3; // 3


switch($x) {
  case 0:
      $x++;
        $z=$x+1;
        break;
  case 1:
       $y=$z+$x;
        break;
  default:
            $z=$z+$x;
}
