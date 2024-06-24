<?php
// SQL injection

// to login to database
// server name ( localhost )
// username
// password
// database name

// Connection
// Open connection // close connection
// Create .....
// edit
// delete
// show ( all data )

define('servername', 'localhost');
define('username', 'root');
define('password', 'root');
define('dbname', 'group109_mec');

$conn = mysqli_connect(servername, username, password, dbname);
//categories
$sql = "SELECT * FROM products where id = 3";

$result = mysqli_query($conn, $sql);

$data = mysqli_fetch_all($result);
//$data = mysqli_fetch_assoc($result);
//var_dump($data);

foreach ($data as $d) {
    echo '<pre>';
    var_dump($d);
}
die();