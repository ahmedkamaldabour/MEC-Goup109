<?php


// var++    نفذ بعدين زرد وخلي القمية تزيد
// ++var   زود وبعدين نفد وخلي القيمة تزيد
// var + 1 زود زلا بحزن

$x = 5 ;
$y = 10 ;
$z = 3 ;

echo 'x = ' . ++$x . '| y = ' . $y++ . '| z =' . $x++ - --$y ; // x = 6| y = 10| z =-4
echo "\n" ;
echo $x ; // 7
echo "\n" ;
echo $y ; // 10
echo "\n" ;
echo $z ; // 3
echo "\n" ;

// 6 | 11 | -4 ali |||
// 6 | 10 | 16 belal |||
// 6 | -10 | -4 karim |||
// 6 10 -4 donia
// rose 6 | 10 | -4

//$x = $x + 5 ;
//$x += 5 ;

//$x += 1 ;
//++$x;

//echo $x +1 ;
//
//echo "\n" ;
//
//echo $x ;
//

//echo $x ;

//echo "\n" ;

// there is a diff betwenn ++x or x++