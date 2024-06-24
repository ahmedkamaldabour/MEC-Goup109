<?php
include 'inc/users.php';
if (isset($_SESSION['user'])) {
    header('Location: index.php');
}
if (isset($_POST['username']) && isset($_POST['password'])) {
    $fomData = [
        'username' => $_POST['username'],
        'password' => $_POST['password']
    ];
    registerUser($fomData);
}
?>
<?php include 'html/header.php'; ?>
<div class='container'>
    <h1 class='mt-5 mb-4'>Register</h1>
    <form method='post' action='register.php'>
        <div class='mb-3'>
            <label for='username' class='form-label'>Username</label>
            <input type='text' class='form-control' id='username' name='username'>
        </div>
        <div class='mb-3'>
            <label for='password' class='form-label'>Password</label>
            <input type='password' class='form-control' id='password' name='password'>
        </div>
        <button type='submit' class='btn btn-primary'>Submit</button>
    </form>
</div>

<?php include 'html/footer.php'; ?>
