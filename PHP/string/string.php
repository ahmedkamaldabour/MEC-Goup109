<?php



// C // char

// a
// b
// c
// d
//['a' , 'c',  'b']

//         01234
$stirng = "Nasef"; // array of char

echo $stirng[] = 'a' ;
$count = 0 ;
for($i=0 ; $stirng[$i] ; $i++){
    $count++;
}
echo $i ;

$count = 0 ;
$i = 0 ;
while(isset($stirng[$i]) !=null){
    $count++;
    $i++ ;
}
echo $count;




