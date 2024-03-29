<?php


function getMinAndMax($numbers)
{
    $maxOdd = null;
    $maxEven = null;
    $minOdd = null;
    $minEven = null;
    $count = count($numbers);
    for ($i = 0; $i < $count; $i++) {
        if ($numbers[$i] % 2 == 0) {
            if ($maxEven == null || $numbers[$i] > $maxEven) {
                $maxEven = $numbers[$i];
            }
        if ($minEven == null || $numbers[$i] < $minEven) {
            $minEven = $numbers[$i];
        }
        } else {
            if ($maxOdd == null || $numbers[$i] > $maxOdd) {
                $maxOdd = $numbers[$i];
            }
        if ($minOdd == null || $numbers[$i] < $minOdd) {
            $minOdd = $numbers[$i];
        }
        }
    }
echo "The maxEeven value inside the array is = " . $maxEven;
    echo "\n";
    echo "The minEeven value inside the array is = " . $minEven;
    echo "\n";
    echo "The MaxOdd value inside the array is = " . $maxOdd;
    echo "\n";
    echo "The MinOdd value inside the array is = " . $minOdd;
}

// input (array) numbers
// output
// 1- max even
// 2- max odd
// 3-min even
// 4-min odd
$numbers = [12, 9, 1, -7, 8, 11, -5];
getMinAndMax($numbers);


$numbers2 = [12, 9, 11, -17, 18, 11, -2];
getMinAndMax($numbers2);
