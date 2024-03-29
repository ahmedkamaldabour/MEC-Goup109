<?php require 'html/header.php' ?>
<?php require 'inc/user.php' ?>
<?php

if (!isset($_SESSION['username'])) {
    header('location: login.php');
    exit;
}

if (isset($_POST['logout'])) {
    logoutUser();
}

$user = getUserData($_SESSION['username'], $_SESSION['password']);

if (!$user) {
    header('location: login.php');
    exit; // Add exit to prevent further execution
}
?>
<body>
<div class='container mt-5'>
    <div class='row justify-content-center'>
        <div class='col-md-6'>
            <div class='card'>
                <div class='card-header bg-primary text-white'>
                    <h2 class='text-center'>Welcome <?php echo $user['username'] ?></h2>
                </div>
                <div class='card-body'> <!-- Fixed missing closing angle bracket -->
                    <form action="" method='post'>
                        <p class="text-center">You have been logged in</p>
                        <button type='submit' name='logout' class='btn btn-primary btn-block'>Logout</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
<?php require 'html/footer.php' ?>
