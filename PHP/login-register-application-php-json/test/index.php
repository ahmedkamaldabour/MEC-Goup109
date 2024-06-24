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

?>
<body>
<div class='container mt-5'>
    <div class='row justify-content-center'>
        <div class='col-md-6'>
            <div class='card'>
                <div class='card-header bg-primary text-white'>
                    <h2 class='text-center'>Welcome <?= $_SESSION['username'] ?></h2>
                </div>

                <a href='profile.php' class='btn btn-success'>Edit Profile</a>

                <div class='card-body'> <!-- Fixed missing closing angle bracket -->
                    <!--                    <from> to logout as a post requst  -->
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
