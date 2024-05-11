<?php


function dd($value)
{
    echo "<pre>";
    var_dump($value);
    die();
}

function dump($value)
{
    echo "<pre>";
    var_dump($value);
}


function is_login()
{
    if (isset($_SESSION['user'])) {
        redirect_to('index');
    }
    return true;
}

function not_login()
{
    if (!isset($_SESSION['user'])) {
        redirect_to('login');
    }
    return true;
}


function redirect_to($page_name)
{
    header("Location: $page_name.php");
}

