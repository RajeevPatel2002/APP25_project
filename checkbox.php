<?php 
    if (isset($_POST['submit'])) {
        if (empty($_POST['month'])) {
            header('Location:checkboxSelectValidation.php?monthErr=Month is required');
            exit;
        } 
        else {
            $selectedMonths = $_POST['month']; 
            echo "You select the month: " . implode(", ", $selectedMonths);
        }
    } else {
        echo "Click the submit button";
    }
?>
<form action="" method="post">
    <input type="checkbox" name="month[]" value="January" id="jan"> January<br>
    <input type="checkbox" name="month[]" value="February" id="feb"> February<br>
    <input type="checkbox" name="month[]" value="March" id="mar"> March<br>
    <input type="checkbox" name="month[]" value="April" id="apr"> April<br>
    <input type="checkbox" name="month[]" value="May" id="may"> May<br>
    <input type="checkbox" name="month[]" value="June" id="jun"> June<br>
    <input type="checkbox" name="month[]" value="July" id="jul"> July<br>
    <input type="checkbox" name="month[]" value="August" id="aug"> August<br>
    <input type="checkbox" name="month[]" value="September" id="sep"> September<br>
    <input type="checkbox" name="month[]" value="October" id="oct"> October<br>
    <input type="checkbox" name="month[]" value="November" id="nov"> November<br>
    <input type="checkbox" name="month[]" value="December" id="dec"> December<br>
    <small style="color:red;">
        <?= isset($_GET['monthErr']) ? htmlspecialchars($_GET['monthErr']) : '' ?>
    </small><br>
    <input type="submit" value="Submit" name="submit" />
</form>