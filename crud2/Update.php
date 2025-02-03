<?php

session_start();
if (!isset($_SESSION['user'])){
    header('Location:login_form.php');
}

$conn = mysqli_connect("localhost","root","","demo2");
if($_SERVER["REQUEST_METHOD"]=='POST'){
    if(empty($_POST['fname'])){
        echo "<script>
        alert('First Name Fill...');
        </script>";
    }
    elseif(empty($_POST['lname'])){
        echo "<script>
        alert('Fill The Last name...');
        </script>";
    }
    elseif(empty($_POST['email'])){
        echo "<script>
        alert('Fill the Email Id...');
        </script>";
    }
    elseif(empty($_POST['password'])){
        echo"<script>
        alert('Fill The Password...');
        </script>";
    }
    elseif(empty($_POST["phone"])){
        echo"<script>
        alert('fill the Phone Number...')
        </script>";
    }
    elseif(empty($_POST["gender"])){
        echo "<script>
        alert('Select The Gender:')
        </script>";
    }
    elseif(empty($_POST["message"])){
        echo "<script>
        alert('Message Box Fill...');
        </script>";
    }
    else{
        $id=$_POST['uid'];
        $fname=$_POST['fname'];
        $lname=$_POST['lname'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $phone=$_POST['phone'];
        $gender=$_POST['gender'];
        $message=$_POST['message'];
        $sql = "Update data_insert set fname='$fname',lname='$lname',email='$email',password='$password',phone='$phone',
        gender='$gender',message='$message' where id=$id";
        if(mysqli_query($conn,$sql)){
            echo "<script>
            alert('Your Account Updated...');
            window.location.href='fetch_data.php';
            </script>";
        }
    }
}

if(isset($_GET["id"])){
    $id = $_GET["id"];
    $sql = "Select * from data_insert where id=$id";
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0){
        $data = mysqli_fetch_assoc($result);
//     }
// }

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
        <h2>Update Form</h2>
        <form action="" method="post">
            <input type="hidden" value="<?= $data['id']?>"name="uid">
            <label for="firstname">First name</label>
            <input type="text"  value="<?= $data['fname']?>"  id="fname" name="fname">

            <label for="lastname">Last name</label>
            <input type="text" value="<?= $data['lname']?>" id="lname" name="lname">

            <label for="email">Email</label>
            <input type="email" value="<?= $data['email']?>" id="email" name="email">

            <label for="password">Password</label>
            <input type="password" value="<?= $data['password']?>" id="password" name="password">

            <label for="phone">Phone</label>
            <input type="number" value="<?= $data['phone']?>" id="phone" name="phone">

            <label>Gender</label>
           <div class="gender-options">
    <input type="radio" id="male" name="gender" value="male" <?= ($data['gender'] === 'male') ? 'checked' : '' ?>>
    <label for="male">Male</label><br>

    <input type="radio" id="female" name="gender" value="female" <?= ($data['gender'] === 'female') ? 'checked' : '' ?>>
    <label for="female">Female</label><br>
</div>
            <label for="about">About You</label>
            <textarea id="message" name="message" rows="4" placeholder="Tell us something about yourself..."><?= $data['message']?></textarea>

            <button type="submit">Update Data</button>
        </form>
    </div>
</body>
</html>
<?php
    }
}
else{
    header('Location:fetch_data.php');
}

?>