<?php


// factrola // kkk kkk kk


// example at nested loops

// 1 2 3 4 5
// 1 2 3 4 5

//for ($row = 1 ; $row <= 2 ; $row++){
//    for ($col = 1 ; $col <= 5 ; $col++){
//        echo $col . ' ' ;
//    }
//    echo "\n" ;
//}

// *
// **
// ***
// ****
// *****

for ($row = 1 ; $row <= 5; $row++){
    for ($col = 1 ; $col <= $row ; $col++){
        echo "*" . ' ' ;
    }
    echo "\n" ;
}

// *
// **
// ***
// ****
// *****
// ****
// ***
// **
// *