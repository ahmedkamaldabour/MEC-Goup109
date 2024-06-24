<?php


// 1 true
// 0 false

// any thant will be true (except zero and null )

$numOne = 5;
$numTwo = 0;

$sign = '/'; // +  - * /


if ($sign == '+') {
    echo $numOne + $numTwo;
} elseif ($sign == '-') {
    echo $numOne - $numTwo;
} elseif ($sign == '*') {
    echo $numOne * $numTwo;
} elseif ($sign == '/') {
    if($numTwo == 0){
        echo "Error can not divide by zero" ;
    }
    else{
        echo $numOne / $numTwo;
    }
} else {
    echo "wrong !!!!!!!!!!!!!!!!!!!!!!!!!";
}

echo "\nDone\n";


// if $test is true (the same) not (not the same)

//if (($n = $test2) || $test || $test3) { // false
//    echo 'the same' . "\n";
//}else{
//    echo 'not the same' . "\n";
//}

// short hand

echo !$numOne ? "true you right" : "fasle your not right " ;


//echo "\n";