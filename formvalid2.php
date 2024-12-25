<?php
$nameerror=$emailerror='';
if ($_SERVER['REQUEST_METHOD']=='POST'){
    if(isset($_POST['validate'])){
        if(empty($_POST['name'])){
            $nameerror="name me kuch bharo";
        }
        elseif(empty($_POST['email'])){
            $emailerror="emil me kuch bharo";
        }
        if(!empty($_POST['name']) && !empty($_POST['email'])){
        echo $_POST['name'];
        echo $_POST['email'];
        }
       
    }
}
?>
<form action="" method="post">
    Name: <input type="text" name="name"><br>
    <small style="color:red"><?= $nameerror?></small><br>
    email: <input type="email" name="email"><br>
    <small style="color:red"><?= $emailerror?></small><br>
     <input type="submit" name="validate" value="validation">
</form>