
<?php
$conn = mysqli_connect('localhost','root','','users_crud');
    session_start();
    if(isset($_SESSION['user'])){
        header('location:read.php');
    }
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $email=$_POST['email'];
        $password=$_POST['password'];
        $sql="select * from login where email='$email'and password='$password'";
        $result= mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)>0){
            $_SESSION['user']=$email;
            header('location:read.php');
        }
        else{
            echo "<script>
            alert('email or password not match');
            </script>";
        }

    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="form.css">
</head>
<body>
   <div class="main-container">
        <!-- Form Section Start -->
            <form action="" method="post">
                <h2 class="reg-heading"> login</h2>
                <div class="input-row">
                    
                </div>    
                <div class="input-row">
                    <div class="input-box"> 
                        <label for="name" class="reg-label">Email:</label>
                        <input type="email" class="reg-input"  name="email">
                    </div>
                    <div class="input-box">
                        <label for="name" class="reg-label">Password:</label>
                        <input type="password" class="reg-input" name="password">    
                    </div>
                </div>
               
                <div class="button">
                    <div class="button">
                     <button type="submit" class="reg-button">Login</button>
                    </div> 
                </div>
                <div class="reg-link">
                 <h5 class="reg-h5">Already Have a Account? <a href="#">Login</a></h5>
                </div> 
            </form>  
        <!-- Form Section End -->
    </div>
</body>
</html>

