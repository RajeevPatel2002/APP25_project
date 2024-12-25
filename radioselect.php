<?php
  if($_SERVER['REQUEST_METHOD'] == 'POST'){
      if(isset($_POST['submit'])){
          if(empty($_POST['country'])){
              header('Location:radioSelectValidation.php?countryErr=Country is required');
          }
          elseif(empty($_POST['gender'])){
                header('Location:radioSelectValidation.php?genderErr=Gender is requieed');
          }
          if(empty($_POST['country']) && empty($_POST['gender'])){
                echo "My country is ".$_POST['country']."and gender is ".$_POST;
          }
      }
    }else{
        echo "Please fill the form";
    }
?>
<form action="" method="post">
    Country: <select name="country" id="country">
        <option value="">Select Country</option>
        <option value="india">India</option>
        <option value="nepal">Nepal</option>
        <option value="shrilanka">ShriLanka</option>
    </select>
    <small style="color:red"><?= isset($_GET['countryErr']) ? $_GET['countryErr'] : '' ?></small><br>
    <br>
    Gender: <input type="radio" name="gender" value="male" />male
    <input type="radio" name="gender" value="female" />female
    <small style="color:red"><?= isset($_GET['genderErr']) ? $_GET['genderErr'] : '' ?></small><br>
    <input type="submit" value="submit" name="submit" />
</form>