<?php

function check_user_can_login($email, $password)
{
    global $errors;
    $user = get_user_by_email($email);
    if (!$user) {
        $errors['email'] = 'Email Not Registered';
        return false;
    }
    if (password_verify($password, $user['password'])) {
        return $user;
    }
    $errors['password'] = 'Password Not Correct';
    return false;
}


function get_user_by_email($email)
{
    global $conn;

    $sql = "SELECT * from users where email = '$email'";
    $result = mysqli_query($conn, $sql);
    return mysqli_fetch_assoc($result);

}