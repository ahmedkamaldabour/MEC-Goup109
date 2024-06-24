<?php


// loops (iterations) // condition => stop condition

//$x = 3;
//
//echo "before : " . $x ;
//echo "\n" ;
//
//// x = 3
//// x = 2
//// x = 1
//// x = 0
//while($x>0){
//    echo $x++ . "\n" ;
//}
//
//echo 'after : ' . $x;
//echo "\n" ;


$x = 4;
$y = 0;

// y = 0    x = 4


// y = 4    x = 5
// y = 9    x = 6
// y = 15   x = 7

while ($y <= 10) { // the while loop will run till y<=10 condition is being met
    $y += $x;  // y = y + x
    $x += 1;
} //the loop will iterate 3 times

echo "the value of x is: $x\n";
echo "the value of y is: $y\n";

