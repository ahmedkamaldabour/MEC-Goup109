<?php
session_start();
include 'src/helper.php';
redirect_if_not_login();

include 'database/db_connection.php';
include 'src/todo.php';
$conn = get_connection();
$user_id = $_SESSION['user']['id'];
$all_todos = get_all_user_todos($user_id);
?>

<?php
include 'inc/header.php';
?>
<h1>User ToDos ( <?= $_SESSION['user']['name'] ?>)</h1>

<table>
    <tr>
        <th>
            <a href="add.php">Add New TODO</a>
        </th>
    </tr>
    <tr>
        <th>#</th>
        <th>Image</th>
        <th>Title</th>
        <th>Body</th>
        <th>Status</th>
        <th>Actions</th>
    </tr>
    <?php foreach ($all_todos as $todo): ?>
        <tr>
            <td><?= $todo['id'] ?></td>
            <td>
                <img src="<?= $todo['image'] ?>" alt="<?= $todo['image'] ?>" width="100">
            </td>
            <td><?= $todo['title'] ?></td>
            <td><?= $todo['body'] ?></td>
            <td><?= $todo['status'] ?></td>
            <td>
                <a href="edit.php?todo_id=<?= $todo['id'] ?>">Edit</a>
                <a href="delete.php?todo_id=<?= $todo['id'] ?>">Delete</a>
            </td>
        </tr>
    <?php endforeach;?>
</table>

<?php
include 'inc/footer.php';
?>
