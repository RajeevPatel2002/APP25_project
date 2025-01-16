<?php
session_start();
if (!isset($_SESSION['user'])){
    header('Location:login_data.php');
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f9;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .form-container {
            background: #fff;
            padding: 20px 40px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }
        .form-container h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }
        .form-container label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            color: #555;
        }
        .form-container input,
        .form-container select,
        .form-container textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .form-container button {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }
        .form-container button:hover {
            background-color: #45a049;
        }
        .gender-options {
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Registration Form</h2>
        <form action="crud_insert_post.php" method="post">
            <label for="firstname">First name</label>
            <input type="text" id="fname" name="fname">

            <label for="lastname">Last name</label>
            <input type="text" id="lname" name="lname">

            <label for="email">Email</label>
            <input type="email" id="email" name="email">

            <label for="password">Password</label>
            <input type="password" id="password" name="password">

            <label for="phone">Phone</label>
            <input type="number" id="phone" name="phone">

            <label>Gender</label>
            <div class="gender-options">
                <input type="radio" id="male" name="gender[]" value="male">
                <label for="male">Male</label><br>
                <input type="radio" id="female" name="gender[]" value="female">
                <label for="female">Female</label><br>
               
            </div>

            <label for="about">About You</label>
            <textarea id="message" name="message" rows="4" placeholder="Tell us something about yourself..."></textarea>

            <button type="submit">Register</button>
        </form>
    </div>
</body>
</html>
