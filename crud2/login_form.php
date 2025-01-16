<?php
$conn = mysqli_connect("localhost", "root", "", "taskwork");

session_start();
if (isset($_SESSION['user'])){
    header('Location:fetch_data.php');
}




if($_SERVER['REQUEST_METHOD']=='POST'){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql = "select * from signup where email='$email' and password='$password'";
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0)
    // if($email == 'diby@gmail.com' && $password == '12345')
    {
        $_SESSION['user']=$email;
        header('Location:fetch_data.php');
    }
    else{
        echo'<script>
        alert("Email or password not matched");
        </script>';
    }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <style>
        /* styles.css */
body {
    font-family: Arial, sans-serif;
    background-color: #f3f4f6;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.form-container {
    background: #ffffff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    width: 300px;
}

form h2 {
    margin-bottom: 20px;
    color: #333333;
    text-align: center;
}

.form-group {
    margin-bottom: 15px;
}

.form-group label {
    display: block;
    margin-bottom: 5px;
    color: #555555;
}

.form-group input {
    width: 100%;
    padding: 10px;
    border: 1px solid #cccccc;
    border-radius: 4px;
    box-sizing: border-box;
}

button {
    width: 100%;
    padding: 10px;
    background-color: #007bff;
    border: none;
    border-radius: 4px;
    color: #ffffff;
    font-size: 16px;
    cursor: pointer;
}

button:hover {
    background-color: #0056b3;
}

    </style>
</head>
<body>
    <div class="form-container">
        <form action="#" method="POST">
            <h2>Registration Form</h2>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Enter your email" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Enter your password" required>
            </div>
            <button type="submit">Register</button>
        </form>
    </div>
</body>
</html>
