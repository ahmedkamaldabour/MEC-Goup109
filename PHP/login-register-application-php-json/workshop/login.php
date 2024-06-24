<?php
include 'inc/users.php';

if (isset($_SESSION['user'])) {
    header('Location: index.php');
}

if (isset($_POST['username']) && isset($_POST['password'])) {
    $isUserExist = loginUser($_POST['username'], $_POST['password']);
    if($isUserExist) {
        header('Location: index.php');
    }
}

?>
<?php include 'html/header.php'; ?>
<h1 class='mt-5 mb-4'>Login</h1>
<div class='container'>
    <?php if (isset($isUserExist) && !$isUserExist): ?>
        <div class='alert alert-danger' role='alert'>
            Username or password is incorrect
        </div>
    <?php endif; ?>
    <form method='post' action='login.php'>
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
