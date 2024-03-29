<?php

$json =
'[
    {
        "username": "ahmed",
        "password": "123"
    },
    {
        "username": "mohamed",
        "password": "456"
    },
    {
        "username": "ali",
        "password": "789"
    }
]';

$data = json_decode($json, true); // array

//foreach ($data as $d) {
//    echo $d['username'] . " - " . $d['password'];
//    echo "<br>";
//}


$json = json_encode($data);

echo $json;