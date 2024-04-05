<?php require 'html/header.php'; ?>

<?php

require 'inc/user.php';
// check if user is already logged in
if (isset($_SESSION['username'])) {
    header('location: index.php');
}

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (loginUser($username, $password)) {
        header('location: index.php');
        exit;
    }

    $error = 'Invalid username or password';
}
?>

<body>
<div class='container mt-5'>
    <div class='row justify-content-center'>
        <div class='col-md-6'>
            <div class='card'>
                <div class='card-header bg-primary text-white'>
                    <h2 class='text-center'>Login Form</h2>
                </div>
                <div class='card-body'>
                    <form action='' method='post' enctype='multipart/form-data' autocomplete='off'>
                        <div class='form-group'>
                            <label for='username'>Username</label>
                            <input type='text' id='username' name='username' class='form-control' required>
                        </div>
                        <div class='form-group'>
                            <label for='password'>Password</label>
                            <input type='password' id='password' name='password' class='form-control' required>
                        </div>
                        <p class="error"><?= @$error ?></p>
                        <button type='submit' name='submit' class='btn btn-primary btn-block'>Register</button>
                    </form>
                </div>
                <div class="card-footer">
                    <p class="text-center">Create an account? <a href="register.php">Register</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
</body>

<?php require 'html/footer.php'; ?>
