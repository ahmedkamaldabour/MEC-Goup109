<?php require 'html/header.php' ?>
<?php require 'inc/user.php' ?>
<?php

if (!isset($_SESSION['username'])) {
    header('location: login.php');
    exit;
}

$userName = $_SESSION['username'];

if (isset($_POST['submit'])) {
    updateUserProfile($_POST['username']);
    header('location: index.php');
}

if (isset($_POST['delete_account'])) {
    deleteUserProfile();
}

?>
<body>
<div class='container mt-5'>
    <div class='row justify-content-center'>
        <div class='col-md-6'>
            <div class='card'>
                <div class='card-header bg-primary text-white'>
                    <h2 class='text-center'>Edit Your profile</h2>
                    <form action="" method='post'>
                        <button type='submit' name='delete_account' class='btn btn-danger btn-block'>Delete Account</button>
                    </form>
                </div>
                <div class='card-body'>
                    <form action="" method='post'>
                        <div class='form-group mt-3'>
                            <label for='username'>Username</label>
                            <input type='text' id='username' value="<?= $userName ?>" name='username' class='form-control'>
                        </div>
                        <button type='submit' name='submit' class='btn btn-primary btn-block mt-3'>Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
<?php require 'html/footer.php' ?>
