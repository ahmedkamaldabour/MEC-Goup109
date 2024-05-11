<?php
session_start();

include 'src/helper.php';
is_login();

include 'database/db_connection.php';
include 'src/users.php';
$conn = get_connection();

$errors = [
    'all' => "",
    'email' => '',
    'password' => '',
];

if ($_SERVER['REQUEST_METHOD'] === "POST" && isset($_POST['login'])) {
    $email = trim(htmlspecialchars(htmlentities($_POST['email'])));
    $password = trim(htmlspecialchars(htmlentities($_POST['password'])));
    $is_valid = true;
    if (empty($email) || empty($password)) {
        $is_valid = false;
        $errors['all'] = 'Email and password are required';
    }
    if ($is_valid) {
        $user = check_user_can_login($email, $password);
        if ($user) {
            $_SESSION['user'] = $user;
            header('Location: index.php');
            exit();
        }
    }
}
?>


<?php
include 'inc/header.php';
?>
<p><h1>LOGIN <?php if ($errors['all']) echo "----->" . $errors['all'] ?></h1></p>
<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" novalidate>
    <label for="email">Email <?php if ($errors['email']) echo ' -----> ' . $errors['email'] ?></label>
    <input type="email" name="email" id="email" value="<?php echo $_POST['email'] ?? '' ?>">

    <label for="password">Password <?php if ($errors['password']) echo ' -----> ' . $errors['password'] ?></label>
    <input type="password" name="password" id="password">

    <button type="submit" name="login" id="login">Login</button>
    <a href="register.php"> Sign in</a>
</form>

<?php
include 'inc/footer.php';
?>

