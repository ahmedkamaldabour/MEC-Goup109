<?php
session_start();

// function to get user data
function getUserData($username, $password)
{
    $data = file_get_contents('storage/users.json');
    $data = json_decode($data, true);
    foreach ($data as $row) {
        if ($row['username'] === $username ) {
            return $row;
        }
    }
    return false;
}

// function to check if user exists
function userExists($username)
{
    $data = file_get_contents('storage/users.json');
    $data = json_decode($data, true);
    foreach ($data as $row) {
        if ($row['username'] == $username) {
            return true;
        }
    }
    return false;
}

// function to register user
function registerUser($username, $password)
{
    if (userExists($username)) {
        return false;
    }
    // validation here
    $data = file_get_contents('storage/users.json');
    $data = json_decode($data, true);
    // hash password
    $password = password_hash($password, PASSWORD_DEFAULT);
    $newData = [
        'username' => $username,
        'password' => $password
    ];
    array_push($data, $newData);
    $data = json_encode($data, JSON_PRETTY_PRINT);
    file_put_contents('storage/users.json', $data);
    return true;
}

// function to login user
function loginUser($username, $password)
{
    if (userExists($username)) {
        $user = getUserData($username, $password);
        if ($user && password_verify($password, $user['password'])) {
            $_SESSION['username'] = $user['username'];
            $_SESSION['password'] = $user['password'];
            return true;
        }
    }
    return false;
}

// function to logout user
function logoutUser()
{
    // logout current user
    session_destroy();
    header('location: login.php');
    exit();
}