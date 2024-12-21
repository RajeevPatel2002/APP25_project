<form action="" method="post">
    <select name="country" id="count">
        <option value="">Select country</option>
        <option value="India">India </option>
        <option value="Canada">Canada</option>
        <option value="America">America</option>
        <option value="Usa">Usa</option>
        <option value="UAE">UAE</option>
        <option value="Vansh">Vansh</option>
    </select><br><br>
    <label for="gen">Gender :</label>
    male<input type="radio"name="gend" value="male">
    Female<input type="radio"name="gend"value="female">
    other<input type="radio"name="gend"value="othr"><br><br>
    <label for="gen">qualification :</label>
    highschool<input type="checkbox" value="pass"name="highschool">
   inter<input type="checkbox" value="fail"name="inter">
   diploma<input type="checkbox" value="bhsdk"name="diploma"><br><br>
   <input type="color" name="color">
    <input type="submit">

</form>
<?php
echo "<pre>";
print_r($_POST['color']);
print_r($_POST);
?>
<div style="height:100px;width:100px;background:<?=$_POST['color']?>"></div>