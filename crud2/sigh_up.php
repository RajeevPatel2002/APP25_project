<?php
$conn = mysqli_connect("localhost", "root", "", "taskwork");

if ($_SERVER["REQUEST_METHOD"] == 'POST') { 
    if (empty($_POST['name'])) { 
        echo "<script>
        alert('Please select the name...');
        </script>";
    } elseif (empty($_POST['email'])) {
        echo "<script>
        alert('Please select the email');
        </script>";
    } elseif (empty($_POST["password"])) {
        echo "<script>
        alert('Please select the password');
        </script>";
    } elseif (empty($_POST["cpassword"])) {
        echo "<script>
        alert('Please confirm the password');
        </script>";
    } else {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $cpassword = $_POST["cpassword"];

        // Corrected variable typo $_cpassword to $cpassword
        if ($password == $cpassword) {
            $sql = "INSERT INTO `signup` (name, email, password, cpassword) 
                    VALUES ('$name', '$email', '$password', '$cpassword')";

            // Check for SQL execution errors
            if (mysqli_query($conn, $sql)) {
                echo "<script>
                alert('Account Created Successfully');
                window.location.href='sigh_up.php';
                </script>";
            } else {
                echo "<script>
                alert('Error: " . mysqli_error($conn) . "');
                </script>";
            }
        } else {
            echo "<script>
            alert('Password and Confirm Password do not match...');
            </script>";
        }
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
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }
    .form-container {
      background: #fff;
      padding: 20px 30px;
      border-radius: 8px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      width: 100%;
      max-width: 400px;
    }
    .form-container h2 {
      text-align: center;
      margin-bottom: 20px;
      color: #333;
    }
    .form-group {
      margin-bottom: 15px;
    }
    .form-group label {
      display: block;
      margin-bottom: 5px;
      color: #555;
    }
    .form-group input {
      width: 100%;
      padding: 10px;
      font-size: 16px;
      border: 1px solid #ccc;
      border-radius: 5px;
      outline: none;
    }
    .form-group input:focus {
      border-color: #007bff;
    }
    .form-group button {
      width: 100%;
      padding: 10px;
      font-size: 16px;
      color: #fff;
      background-color: #007bff;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }
    .form-group button:hover {
      background-color: #0056b3;
    }
    .form-group .error-message {
      color: red;
      font-size: 14px;
      margin-top: 5px;
    }
  </style>
</head>
<body>
  <div class="form-container">
    <h2>Sign-Up</h2>
    <form id="registrationForm" method="post">
      <div class="form-group">
        <label for="name">Name</label>
        <input type="text" id="name" name="name" required>
      </div>
      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" required>
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" required>
      </div>
      <div class="form-group">
        <label for="confirmPassword">Confirm Password</label>
        <input type="password" id="cpassword" name="cpassword" required>
        <div class="error-message" id="errorMessage"></div>
      </div>
      <div class="form-group">
        <button type="submit">SignUp</button>
      </div>
    </form>
  </div>

  <!-- <script>
    const form = document.getElementById('registrationForm');
    const password = document.getElementById('password');
    const confirmPassword = document.getElementById('confirmPassword');
    const errorMessage = document.getElementById('errorMessage');

    form.addEventListener('submit', (e) => {
      if (password.value !== confirmPassword.value) {
        e.preventDefault();
        errorMessage.textContent = 'Passwords do not match!';
      } else {
        errorMessage.textContent = '';
      }
    });
  </script> -->
</body>
</html>
