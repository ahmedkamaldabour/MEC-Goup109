<?php


include 'database/db_connection.php';
include 'src/users.php';
include 'src/validation.php';
$conn = get_connection();

$errors = [
    'all' => '',
    'email' => '',
    'password' => '',
];

echo 'register' ;