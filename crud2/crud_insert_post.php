<?php

session_start();
if (!isset($_SESSION['user'])){
    header('Location:fetch_data.php');
}




$conn = mysqli_connect(hostname: "localhost",username: "root",password: "",database: "demo2");
if ($_SERVER["REQUEST_METHOD"]=='POST'){
    if(empty($_POST['fname'])){
        echo "<script>
        
        alert('Please Fill The name coloum...');
        window.location.href='crud_insert.php';        
        </script>";
    }
    elseif(empty($_POST['lname'])){
        echo "<script>
        alert('Please Fill the Last name coloum...');
        window.location.href='crud_insert.php';
        </script>";
    }
    elseif(empty($_POST["email"])){
        echo "<script>
        alert('Please fill the Email...');
        window.location.href='crud_insert.php';
        </script>";
    }

    elseif(empty($_POST["password"])){
        echo "<script>
        alert('Please Fill The Password...');
        window.location.href='crud_insert.php';
        </script>";
    }
    elseif(empty($_POST["phone"])){
        echo "<script>
        alert('Please Enter the phone number...');
        window.location.href='crud_insert.php';
        </script>";
    }
    elseif(empty($_POST["gender"])){
        echo "<script>
        alert('Please select the Gender...');
        window.location.href='crud_insert.php';
        </script>";
    }
    elseif(empty($_POST["message"])){
        echo "<script>
        
        alert('Please Type the message...');
        window.location.href='crud_insert.php';        
        </script>";
    }
    else{
        $fname=$_POST["fname"];
        $lname=$_POST["lname"];
        $email=$_POST["email"];
        $password=$_POST["password"];
        $phone=$_POST["phone"];
        $genderData=$_POST["gender"];
        $gender = implode(separator: ",",array: $genderData);
        $message=$_POST["message"];
        $sql = "Insert into data_insert(fname,lname,email,password,phone,gender,message) values('$fname','$lname','$email','$password','$phone','$gender','$message')";
        if(mysqli_query(mysql: $conn,query: $sql)){
            echo "<script>
            alert('Your data is sucessfully Submitted... ');
            window.location.href='fetch_data.php';
            </script>";
        }
        else{
            header("Location:crud_insert.php");
        }
    }
}
?>