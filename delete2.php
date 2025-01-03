<?php
if(isset($_GET['id'])){
    $id= $_GET['id'];
    $con = mysqli_connect('localhost','root','','demo4');
    $sql = "Delete from contact_tbl where id=$id ";
    if(mysqli_query($con, $sql))
    {
        echo " <script>
            alert('Data deleted Succesfully');
            window.location.href='table1.php';
        </script>";
    } else {
        header('location:contactData.php');
    }
}
?>