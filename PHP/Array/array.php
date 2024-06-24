<?php

$arrry[3][3] =
    [
        [1, 2, 3],
        [4, true, 6],
        [7, 'asdfksad', 8],
        [10, 11, 12]
    ];


//
//['ahmed' , 'ahmed']
//[50 , 10 , 0]
// [ 'ahmed', 50 ]


//         0          1          .....
// indexing array
// key => is only ( int , string )
// value => any datatype 
$array =
    [
        //  key => value
        'string' => 'belal',
        'int' => 50,
        'bool' => true,
        'folat' => 50.5,
        'null' => null,
        'array-inside' => [
            'one' => [1, "one"],
            2, 3, 4, 5
        ]
    ];
print_r($array['array-inside'][0]); // 2D 
echo "\n";
