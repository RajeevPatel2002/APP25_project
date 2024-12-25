<form action="vaildatepost.php" method="post">
    Name: <input type="text" name="name"><br>
    <small style="color:red"><?= isset($_GET['nameerror'])?$_GET['nameerror']:''  ?></small><br>
    email: <input type="email" name="email"><br><br>
    <small style="color:red"><?= isset($_GET['emailerror'])?$_GET['emailerror']:''  ?></small><br>
     <input type="submit" name="validate" value="validation">
</form>
<!-- ////this page is depend on validatepost.php -->