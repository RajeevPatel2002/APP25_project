<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    if(isset($_POST['Validate'])){
        if(empty($_POST('name'))){
            echo "name feild isrequired";
        }
        elseif(empty($_POST('email'))){
            echo "email feild isrequired";
        }
        else{
            echo $_POST('name');
            echo $post('email');
        }
    }
}
?>
<form action="" method="$_POST">
    Name : <input type="text" name="name">
    Email : <input type="text" name="email">
    <input type="submit" value="submit" name="Validate">
</form>