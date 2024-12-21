<?php
$pahada = $_POST['pahada'];
for($i=1; $i<=10; $i++){
    echo $pahada."*".$i."=".$pahada*$i."<br>";
}
?>
<form action="" method="post">
    <input type="text" name="pahada">
    <input type="submit">
</form>