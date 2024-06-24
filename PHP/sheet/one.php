<?php

function capitalized_frist_letter(&$names) {
    $result = array();
    foreach ($names as $name) {
       ucfirst($name);
    }
}

$names = ["eraasoft", "backend", "group313"];
print_r($names);
print_r(capitalized_frist_letter($names));

//A program that calculates the average = sum / count  of the numbers in an array of n = 10
//elements. The array is filled with random numbers

//$n = 5;
//$array = [];
//
//$sum = 0 ;
//for ($i = 0; $i < $n; $i++) {
//    $array[$i] = rand(1, 5);
//    echo $array[$i] . " - " ;
//    $sum += $array[$i];
//}
//// average = sum  / count of array
//echo "\n" ;
//echo $sum / $n ;


//function moveZeroes(&$nums) {
//    foreach ($nums as $index => $num) {
//        if ($num == 0) {
//            $nums[] = $nums[$index];
//            unset($nums[$index]);
//        }
//    }
//}
//
//
//$nums = [0, 1, 0, 3, 12];
//
//print_r($nums);
//
//moveZeroes($nums);
//
//print_r($nums);