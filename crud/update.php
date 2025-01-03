<?php
$connect=mysqli_connect('localhost','root','','personal_data');
if($_SERVER['REQUEST_METHOD']=='POST'){
    if(empty($_POST['username'])){
        echo "<script>
        alert('username is required');
        </script>";
    }
    elseif(empty($_POST['dob'])){
        echo "<script>
         alert('please fill dob');
        </script>";
    }
    elseif(empty($_POST['country'])){
        echo "<script>
        alert('please fill country');
        </script>";
    }
    elseif(empty($_POST['gender'])){
        echo "<script>
        alert('please fill gender');
        </script>";
    }
    elseif(empty($_POST['subject'])){
        echo "<script>
       alert('please fill subject');
        </script>";
    }
    if(empty($_POST['description'])){
        echo "<script>
        alert('please fill description');
        </script>";
    }
    else{
        $id=$_POST['id'];
        $username=$_POST['username'];
        $dob=$_POST['dob'];
        $country=$_POST['country'];
        $gender=$_POST['gender'];
        $subdata=$_POST['subject'];  
        $subject=implode(',',$subdata);///for converting the srting to array
        $description=$_POST['description'];
         $sql= "update alltype set username='$username',dob='$dob',country='$country',gender='$gender',subject='$subject',description='$description' where id=$id";
        if(mysqli_query($conn,$sql)){
            echo "<script>
            alert('data updated successfilly');
            window.location.href='read.php';
            </script>";
        }
    }
}
?>
<?php
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $sql="select * from reg_form where id ='$id'";
    if($res=mysqli_query($connect,$sql)){
        $data=mysqli_fetch_assoc($res);
       $subject= explode(',',$data['subject']);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Example</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f9f9f9;
        }
        .form-container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        .form-container h2 {
            margin-bottom: 15px;
            text-align: center;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        .form-group input, 
        .form-group textarea, 
        select,
        .form-group button {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
 
            border-radius: 4px;
        }
        .form-group textarea {
            resize: none;
        }
        .form-group .checkbox-group,
        .form-group .radio-group {
            display: flex;
            gap: 10px;
        }
        .form-group button {
            background-color: #28a745;
            color: #fff;
            border: none;
            cursor: pointer;
        }
        .form-group button:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Registration Form</h2>
        <form method="post">
            <div class="form-group">
                <input type="hidden" name="id" value="<?= $data['id']?>">
                <label for="name">Name</label>
                <input type="text" id="name" name="username" placeholder="Enter your name" value="<?= $data['username']?>" >
            </div>
            <div class="form-group">
                <label for="dob">Date of Birth</label>
                <input type="date" id="dob" name="dob"  value="<?= $data['dob']?>">
            </div>
            <div class="form-group">
                <label for="select">select country</label>
                <select name="country" id="">
                     <option value="">select</option>
                    <option <?=$data['country']=='india'?'selected':''?> value="india">india</option>
                    <option <?=$data['country']=='nepal'?'selected':''?> value="nepal">nepal</option>
                </select>
            </div>
            <div class="form-group">
                <label>Choose Your Gender</label>
                <div class="radio-group">
                    <label><input type="radio"  name="gender" value="male" <?=$data['gender']=='male'?'checked':''?>> Male</label>
                    <label><input type="radio"  name="gender" value="female" <?=$data['gender']=='female'?'checked':''?>> Female</label>
                </div>
            </div>
            <div class="form-group">
            <label>Subject</label>
                    <input type="checkbox" name="subject[]" value="hindi" <?= in_array('hindi', $subject)?'checked':''?> > hindi
                    <input type="checkbox" name="subject[]" value="english" <?= in_array('hindi', $subject)?'checked':''?>> english
                    <input type="checkbox" name="subject[]" value="hinglish" <?= in_array('hindi', $subject)?'checked':''?>> hinglish
               
            </div>
            <div class="form-group">
                <label for="message">Your Message</label>
                <textarea id="message" name="description" rows="4" placeholder="Write your message here..."><?= $data['description']?></textarea>
            </div>
            <div class="form-group">
                <button type="submit">update</button>
            </div>
        </form>
    </div>
</body>
</html>
<?php
    }
}
?>