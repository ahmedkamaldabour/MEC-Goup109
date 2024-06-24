<?php


function sanitization($value)
{
    return trim(htmlspecialchars(htmlentities($value)));
}

function validate_todo_data($title, $body, $image)
{
    global $errors;
    if (empty($title)) {
        $errors['title'] = 'Title is required';
        return false;
    }
    if (strlen($title) < 3 || strlen($title) > 255) {
        $errors['title'] = 'Title must be between 3 and 255 characters';
        return false;
    }
    if (empty($body)) {
        $errors['body'] = 'Body is required';
        return false;
    }
    if (empty($image['name'])) {
        $errors['image'] = 'Image is required';
        return false;
    }
    if ($image['size'] > 1000000) {
        $errors['image'] = 'Image size is too large';
        return false;
    }
    return true;
}