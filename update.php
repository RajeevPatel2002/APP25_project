<?php
$connect = mysqli_connect('localhost', 'root', '', 'app25_crud');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST['fname'])) {
        echo "<script>
    window.alert ('Please enter the first name');
    window.location.href='update.php';
    </script>";
    }
    elseif (empty($_POST['lname'])) {
        echo "<script>
    alert ('Please enter the last name');
    window.location.href='update.php';
    </script>";
    } 
    elseif (empty($_POST['phone'])) {
        echo "<script>
    alert ('Please enter the Phone Number');
    window.location.href='update.php';
    </script>";
    }
    elseif (empty($_POST['email'])) {
        echo "<script>
    alert ('Please enter the email');
    window.location.href='update.php';
    </script>";
    }
    else {
        $id=$_POST['uid'];
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];

        $sql="update college set fname='$fname',lname='$lname',phone='$phone' ,email='$email' where id=$id";
        if (mysqli_query($connect,$sql)) {
            echo "<script>
        alert('Data entered successfully');
        window.location.href='read.php';
        </script>";
        }
        else {
            echo "Error: " . mysqli_error($conn);
        } 
    }
}
if(isset($_GET["id"])){
    $id=$_GET['id'];
    $sql="select * from college where id=$id";
    $result=mysqli_query($connect,$sql);
    if(mysqli_num_rows($result)>0){
        $data=mysqli_fetch_assoc($result);
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <style>
        * {
            margin: 0px;
            padding: 0px;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0;

        }

        .main-container {
            min-height: 400px;
            width: 100%;
            max-width: 800px;
            background-color: #eeeeee;
            border-radius: 20px;
            align-items: center;
            margin-top: 70px;
        }

        .reg-heading {
            font-size: 24px;
            margin-bottom: 20px;
            text-align: center;
            font-weight: 800;
            line-height: 24px;
            font-weight: 500;
            letter-spacing: 3px;
            background-color: #002233;
            padding-top: 20px;
            padding-bottom: 20px;
            color: #ffffff;
            border-radius: 10px 10px 0px 0px;
        }

        .main-container:hover {
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
        }

        /* ------------------------------------------------------- */
        .input-row {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            margin-bottom: 5px;
            margin-right: 30px;
        }

        .input-box {
            display: flex;
            flex-direction: column;
            width: 48%;
            margin-bottom: 5px;
        }


        /* ------------------------------------------------------------ */

        .reg-label {
            font-size: 18px;
            font-weight: 500;
            padding-left: 20px;
            color: #002233;
        }


        .reg-input {
            box-sizing: border-box;
            padding: 10px 5px;
            margin-left: 20px;
            margin-bottom: 5px;
            font-size: 17px;
            outline: none;
            font-weight: 500;
            border-top: none;
            border-left: none;
            border-right: none;
            background: none;
        }


        .reg-input:hover {
            transform: translate(3px, 1px);
        }


        .button {
            text-align: center;
            margin-top: 40px;
            margin-bottom: 40px;
        }

        .reg-button {
            width: 30%;
            padding: 13px 20px;
            border-radius: 20px;
            font-weight: 400;
            font-size: 16px;
            background-color: #002233;
            color: #ffffff;
            border: none;
            letter-spacing: 2px;
        }

        .reg-button:hover {
            cursor: pointer;
            background-color: #45a049;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
        }

        .reg-link {
            background: #002233;
            padding-bottom: 20px;
            border-radius: 0px 0px 10px 10px;
        }

        .reg-h5 {
            text-align: center;
            margin-top: 30px;
            font-size: 17px;
            font-weight: 400;
            color: #ffffff;
            letter-spacing: 2px;
            padding-top: 20px;
        }

        .reg-link a {
            color: #ffffff;
            letter-spacing: 2px;
        }
    </style>
</head>

<body>
    <div class="main-container">
        <!-- Form Section Start -->
        <form action="update.php" method="post">
            <h2 class="reg-heading">UPDATE PAGE</h2>
            <div class="input-row">
                <div class="input-box">
                    <input type="hidden" value="<?=$data["id"]?>"name="uid">
                    <label for="name" class="reg-label">First Name:</label>
                    <input type="text" value="<?=$data["fname"]?>"name="fname" class="reg-input">
                </div>
                <div class="input-box">
                    <label for="name" class="reg-label">Last Name:</label>
                    <input type="text" value="<?=$data["lname"]?>" name="lname"  class="reg-input">
                </div>
            </div>
            <div class="input-row">
                <div class="input-box">
                    <label for="name" class="reg-label">Phone:</label>
                    <input type="number"value="<?=$data["phone"]?>" name="phone"  class="reg-input">
                </div>
                <div class="input-box">
                    <label for="name" class="reg-label">Email:</label>
                    <input type="email" value="<?=$data["email"]?>" name="email"  class="reg-input">
                </div>
            </div>
            <!-- <div class="button"> -->
            <div class="button">
                <button type="submit" class="reg-button">UPDATE ACCOUNT</button>
            </div>
            <!-- </div> -->
            <div class="reg-link">
                <h5 class="reg-h5">Already Have a Account? <a href="#">Login</a></h5>
            </div>
        </form>
        <!-- Form Section End -->
    </div>

</body>

</html>
<?php 
}
else{
    header('location:read.php');
}
?>