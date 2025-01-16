<?php
// print_r($_POST);
$con=mysqli_connect('localhost','root','','users_crud');
if($_SERVER['REQUEST_METHOD']=='POST'){
    if(empty($_POST['fname'])){
        echo '<script>
        alert("please enter your first name");
        window.location.href="form.php";
        </script>';
    }
    elseif(empty($_POST['lname'])){
        echo '<script>
        alert("please enter your lst name");
        window.location.href="form.php";
        </script>';
    }
    elseif(empty($_POST['num'])){
        echo '<script>
        alert("please enter your moble number");
        window.location.href="form.php";
        </script>';
    }
    elseif(empty($_POST['email'])){
        echo '<script>
        alert("please enter your email");
        window.location.href="form.php";
        </script>';
    }
    /// database me data insert kerna
    else{
        $fname= $_POST['fname'];
        $lname= $_POST['lname'];
        $number= $_POST['num'];
        $email= $_POST['email'];
        $sql="insert into formdata(fname,lname,number,email)
        values('$fname','$lname','$number','$email')";
        if(mysqli_query($con,$sql)){
            echo "<script>
            window.alert('data inserted succsefully');
            window.location.href ='read.php';
            </script>";
        }
        else{
            echo mysqli_error_list($con);
        }

    }
}
?>