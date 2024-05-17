<?php


function get_all_user_todos($user_id)
{
    global $conn;
    $sql = "SELECT * FROM `todos` where user_id = '$user_id'";
    $result = mysqli_query($conn, $sql);
    $all_todos = [];
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $all_todos[] = $row;
        }
    }
    return $all_todos;
}

function add_todo($title, $body, $image, $user_id)
{
    global $conn;
    $image_name = $image['name'];
    $image_temp = $image['tmp_name'];
    $image_new_name = time() . "-" . $image_name;
    $image_destination = 'uploads/' . $image_new_name;
    move_uploaded_file($image_temp, $image_destination);
}