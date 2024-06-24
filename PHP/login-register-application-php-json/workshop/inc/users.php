<?php
session_start();

function registerUser($fomData)
{
    $allData = file_get_contents('storage/users.json'); // json data
    $allData = json_decode($allData, true); // convert json to array
    array_push($allData, $fomData); // add new data to array
    $allData = json_encode($allData); // convert array to json
    file_put_contents('storage/users.json', $allData); // save json data to file
    // redirect to login page
    header('Location: login.php');
}


function loginUser($username, $password)
{
    $allData = file_get_contents('storage/users.json');
    $allData = json_decode($allData, true);
    $isUserExist = false;
    foreach ($allData as $data) {
        if ($data['username'] === $username && $data['password'] === $password) {
            $isUserExist = true;
            $_SESSION['user'] = $username;
            return $isUserExist;
        }
    }
    return $isUserExist;
}