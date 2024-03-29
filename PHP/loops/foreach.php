<?php


//
//for ($i = 0 ; $i < 3 ; $i++) {
//    echo $names[$i] . ' - ';
//}


// foreach

//$names = ['Alpha', 'Bravo', 'Charlie'];
//foreach ($names as $name)
//{
//    echo $name . ' * ' ;
//}


$data = [
    'name' => 'Group109',
    'track' => 'backEnd',
    'lang' => 'php',
    'gourp_number' => 5
];

foreach ($data as $key => $value) {
    if ($key == 'gourp_number' && $value > 7) {
        echo 'big group  ';
    }
    echo $key . " => " . $value . "\n";
}

