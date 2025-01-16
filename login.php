<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    if ($username == 'rajeev' && $password == 12345) {
        session_start();
        $_SESSION['logindata'] = $username;
        header('Location:dashboard.php');
    } else {
        echo "<script>
            alert('username or password incorrect');
        </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        USER ID<input type="text" name="username"><br><br>
        PASSWORD<input type="password" name="password"><br><br>
        <button type="submit">Login</button>
    </form>
</body>

</html>