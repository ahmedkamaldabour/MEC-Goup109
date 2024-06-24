<?php

include 'db_connection.php';
include '../src/helper.php';

$conn = get_connection();


$create_users_table = "CREATE TABLE IF NOT EXISTS users (
     id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
     name VARCHAR(255) NOT NULL,
     email VARCHAR(255) UNIQUE NOT NULL,
     password VARCHAR(255) NOT NULL
 )";

mysqli_query($conn, $create_users_table);


$create_todos_table = 'CREATE TABLE IF NOT EXISTS todos (
     id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
     title VARCHAR(255) NOT NULL,
     body  TEXT,
     image VARCHAR(255),
     status BOOLEAN DEFAULT 0,
    user_id int(11) UNSIGNED,
    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE
 )';

mysqli_query($conn, $create_todos_table);


// seeder
// inert default user to users table
$name = 'admin';
$email = 'admin@admin.com';
$password = password_hash('123456', PASSWORD_DEFAULT);

$check_user = "SELECT * from users where email = '$email' ";
$result = mysqli_query($conn, $check_user);
if(mysqli_num_rows($result) == 0){
    $insert_user = "INSERT INTO users (name , email , password) values ('$name', '$email', '$password')";
    mysqli_query($conn, $insert_user);
}
