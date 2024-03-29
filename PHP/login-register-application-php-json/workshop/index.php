<?php include 'html/header.php'; ?>
<?php include 'inc/users.php'; ?>

<?php
if (!isset($_SESSION['user'])) {
    header('Location: login.php');
}
?>

<?php
if (isset($_POST['logout'])) {
    session_destroy();
    header('Location: login.php');
}
?>

<div class='container mt-5'>
    <div class='row justify-content-center'>
        <div class='col-md-6'>
            <div class='card'>
                <div class='card-header bg-primary text-white'>
                    <h2 class='text-center'>Welcome <?php echo $_SESSION['user'] ?></h2>
                </div>
                <div class='card-body'>
                    <form action="" method='post'>
                        <p class="text-center">You have been logged in</p>
                        <button type='submit' name='logout' class='btn btn-primary btn-block'>Logout</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'html/footer.php'; ?>
