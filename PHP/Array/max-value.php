<?php


function printMaxAndMin($arrayNumbers){
    $count = count($arrayNumbers);
    $max = null ; 
    $min = null ;
    for($i = 0 ; $i< $count ; $i++){
        if($max == null || $arrayNumbers[$i] > $max){
            $max = $arrayNumbers[$i];
        }
    if( $min ==null || $arrayNumbers[$i] < $min){
        $min =$arrayNumbers[$i];
    }
    }
    echo "The max value inside the array is = " . $max;
    echo "\n" ;
    echo "The min value inside the array is = " . $min;
    echo "\n" ;
    echo "===================================";
    echo "\n" ;
}

$arrayNumbers = [2, 9, 1 , 17, 15 , 16 , -1];
//echo max($arrayNumbers);
//echo min($arrayNumbers);

//printMaxAndMin($arrayNumbers);
//
//
//$arrayNumbers2 = [2, 9, 1 , 1000 , 958 , 1 , 5 , 10];
//printMaxAndMin($arrayNumbers2);
//
//
//$arrayNumbers3 = [2, 9, 1 , 20 , 9 , 1 , 5 , 10];
//printMaxAndMin($arrayNumbers3);