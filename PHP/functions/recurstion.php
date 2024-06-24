<?php



function sum ($x , $y) {
    if($x == 10 ){
        return $x + $y ;
    }
    return sum($x+1 , $y+1);
}

echo sum(5,10);

