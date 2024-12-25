<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    if(isset($_POST['validate'])){
        if(empty($_POST['name'])){
            header('Location:validation1.php?nameerror=Name feild is requrire');
        }
        elseif(empty($_POST['email'])){
            header('Location:validation1.php?emailerror=email feild is requrire');  
        }
        else{
            echo "my name is ".$_POST['name']."and email is ".$_POST['email'];
        }

    }
    echo "invalid ";
}


?>