<?php
session_start();
include 'src/helper.php';
redirect_if_not_login();

include 'database/db_connection.php';
include 'src/todo.php';
include 'src/validation.php';
$conn = get_connection();
$user_id = $_SESSION['user']['id'];

$errors = [
    'title' => '',
    'body' => '',
    'image' => '',
];

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['add_todo'])) {
    $title = sanitization($_POST['title']);
    $body = sanitization($_POST['body']);
    $image = $_FILES['photo'];
    $is_valid = validate_todo_data($title, $body, $image);
    if ($is_valid) {
         add_todo($title, $body, $image, $user_id);
    }


}

?>

<?php
include 'inc/header.php';
?>
<h1>Add ToDO</h1>

<form action="" method="post" enctype='multipart/form-data' novalidate>
    <label for="title">Title</label>
    <span><?= '==>' . $errors['title'] ?></span>
    <input type="text" name="title" id="title" required>

    <label for="body">Body</label>
    <span><?= '==>' . $errors['body'] ?></span>
    <textarea name="body" id="body" required></textarea>

    <label for="image">Image</label>
    <span><?= '==>' . $errors['image'] ?></span>
    <input type="file" name="photo" id="image" required>

    <button type="submit" name="add_todo" id="add_todo">Add TODO</button>
    <a href="index.php">Back</a>
</form>

<?php
include 'inc/footer.php';
?>
