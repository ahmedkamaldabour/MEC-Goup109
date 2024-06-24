<?php


function dd($value)
{
    echo "<pre>";
    var_dump($value);
    echo "</pre>";
    die();
}

function dump($value)
{
    echo "<pre>";
    var_dump($value);
    echo "</pre>";
}


function is_login()
{
    if (isset($_SESSION['user'])) {
        redirect_to('index');
    }
    return true;
}

function redirect_if_not_login()
{
    if (!isset($_SESSION['user'])) {
        redirect_to('login');
    }
    return true;
}


function redirect_to($page_name)
{
    header("Location: $page_name.php");
    exit();
}

