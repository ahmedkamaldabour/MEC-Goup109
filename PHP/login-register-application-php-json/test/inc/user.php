<?php
session_start();
// function to get user data
function getUserData($username, $password)
{
    $data = getAllUserData();
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
    $data = getAllUserData();
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
    // check empty fields
    // trim fileds
    // if email check email ( check for mail )
    // **** ****** *****
    $data = getAllUserData();
    // hash password
    $password = password_hash($password, PASSWORD_DEFAULT);
    $newData = [
        'username' => $username,
        'password' => $password
    ];
    array_push($data, $newData);
    putAllUserData($data);
    return true;
}
// function to login user
function loginUser($username, $password)
{
    if (userExists($username)) {
        $user = getUserData($username, $password);
        if ($user && password_verify($password, $user['password'])) {
            $_SESSION['username'] = $user['username'];
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
// function to update user profile
function updateUserProfile($username)
{
    // validation on username
    $data = getAllUserData();
    foreach ($data as $key => $row) {
        if ($row['username'] === $_SESSION['username']) {
            $data[$key]['username'] = $username;
            $_SESSION['username'] = $username;
            break;
        }
    }
    putAllUserData($data);
    return true;
}
// function to delete user profile
function deleteUserProfile()
{
    $data = getAllUserData();
    foreach ($data as $key => $row) {
        if ($row['username'] === $_SESSION['username']) {
            unset($data[$key]);
            break;
        }
    }
    putAllUserData($data);
    logoutUser();
    return true;
}
function getAllUserData()
{
    $data = file_get_contents('storage/users.json');
    $data = json_decode($data, true);
    return $data;
}
function putAllUserData($data)
{
    $data = json_encode($data, JSON_PRETTY_PRINT);
    file_put_contents('storage/users.json', $data);
}