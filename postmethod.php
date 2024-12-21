<?php
// print_r($_POST);
echo "my name is ".$_POST['name']."</br>";
echo "my email is ".$_POST['email']."</br>";
echo "my contact no. is ".$_POST['phone']."</br>";
echo "my massage is ".$_POST['massage']."</br>";

?>
<form action="" method="post">
    <!-- <label for="Name">Name</label>
    <input type="text" name="name">
    <label for="Phone">Phone</label>
    <input type="Number" name="phone">
    <button type="submit">submit</button> -->
    <input type="text" name="name">
    <input type="text" name="email">
    <input type="text" name="phone">
    <input type="text"name="massage">
    <input type="submit">
</form>