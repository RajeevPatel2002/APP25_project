<?php
$conn = mysqli_connect('localhost','root','','users_crud');
if($_SERVER['REQUEST_METHOD']=='POST'){
    if(empty($_POST['email'])){
        echo "<script>
        alert('email is required');
        </script>";
    }
    elseif(empty($_POST['name'])){
        echo "<script>
        alert('name is required');
        </script>";
    }
    elseif(empty($_POST['password'])){
        echo "<script>
        alert('password is required');
        </script>";
    }
    elseif(empty($_POST['c_password'])){
        echo "<script>
        alert('cnf passsword is required');
        </script>";
    }
    else{
        $email=$_POST['email'];
        $name=$_POST['name'];
        $password=$_POST['password'];
        $c_pass=$_POST['c_password'];
        if(!empty($email)){
            $sql="Select * from login where email='$email'";
            $data=mysqli_query($conn,$sql);
            if(mysqli_num_rows($data)>0){
                echo "<script>
                    alert('your given email already exist');
                </script>";
            }
            elseif($password!=$c_pass){
                echo "<script>
                    alert('password and confirm password not match');
                </script>";
            }
        }
        
        
        $sql="insert into login(email,name,password)values('$email','$name','$password')";
        if(mysqli_query($conn,$sql)){
            echo "<script>
            alert('Account created successfully');
            window.location.href='login.php';
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
    <title>Document</title>
    <link rel="stylesheet" href="./form.css">
</head>
<body>
<div class="main-container">
        <!-- Form Section Start -->
            <form action="" method="post">
                <h2 class="reg-heading"> sign in</h2>
                <div class="input-row">
                    
                </div>    
                <div class="input-row">
                    <div class="input-box"> 
                        <label for="name" class="reg-label">Email:</label>
                        <input type="email" class="reg-input"  name="email">
                    </div>
                    <div class="input-box">
                        <label for="name" class="reg-label">Name:</label>
                        <input type="text" class="reg-input" name="name">    
                    </div>
                </div>
                <div class="input-row">
                    <div class="input-box"> 
                        <label for="name" class="reg-label">password:</label>
                        <input type="password" class="reg-input"  name="password">
                    </div>
                    <div class="input-box">
                        <label for="name" class="reg-label"> con-Password:</label>
                        <input type="password" class="reg-input" name="c_password">    
                    </div>
                </div>
               
                <div class="button">
                    <div class="button">
                     <button type="submit" class="reg-button">sign up</button>
                    </div> 
                </div>
                <div class="reg-link">
                 <h5 class="reg-h5">Already Have a Account? <a href="#">Login</a></h5>
                </div> 
            </form>  
        <!-- Form Section End --> 
</body>
</html>