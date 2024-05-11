<?php

define('servername', 'localhost');
define('username', 'root');
define('password', 'root');
define('dbname', 'todo_app');


function get_connection()
{
    $conn = mysqli_connect(servername, username, password);
    $sql = "CREATE DATABASE IF NOT EXISTS " . dbname;
    mysqli_query($conn,$sql);
    mysqli_close($conn);

    return mysqli_connect(servername, username, password , dbname);
}