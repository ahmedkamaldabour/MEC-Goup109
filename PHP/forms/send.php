<?php

if (isset($_POST['username'], $_POST['password'])) {
    $resviedData = [
        'username' => $_POST['username'],
        'password' => $_POST['password']
    ];
    $savedData = json_decode(file_get_contents('data.json'), true);
    array_push($savedData, $resviedData);
    file_put_contents('data.json', json_encode($savedData));
}

$data = file_get_contents('data.json');
$data = json_decode($data, true);


?>

<!doctype html>
<html lang='en'>
<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>Bootstrap Demo</title>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css' rel='stylesheet'
          integrity='sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH' crossorigin='anonymous'>
</head>
<body>
<div class='container'>
    <h1 class='mt-5 mb-4'>Register</h1>
    <form method='post' action='send.php'>
        <div class='mb-3'>
            <label for='username' class='form-label'>Username</label>
            <input type='text' class='form-control' id='username' name="username">
        </div>
        <div class='mb-3'>
            <label for='password' class='form-label'>Password</label>
            <input type='password' class='form-control' id='password' name="password">
        </div>
        <button type='submit' class='btn btn-primary'>Submit</button>
    </form>

    <div class='mt-5'>
        <h2>Receive</h2>
        <p>
            <?php
            if (isset($data["username"], $data["password"])) {
                echo "Username: " . $data["username"] . "<br>";
                echo "Password: " . $data["password"];
            }
            ?>
        </p>
    </div>
</div>

<script src='https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js'
        integrity='sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz' crossorigin='anonymous'></script>
</body>
</html>
