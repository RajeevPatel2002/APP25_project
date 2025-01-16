<?php
session_start();
if (!isset($_SESSION['user'])){
    header('Location:fetch_data.php');
}






if(isset($_GET["id"])){
    $id = $_GET["id"];
    $conn = mysqli_connect("localhost","root","","taskwork");
    $sql = "Delete from data_insert where id=$id";
    if(mysqli_query($conn,$sql)){
        echo "<script>
        alert('Your data delete Successfully...');
        window.location.href='fetch_data.php';
        </script>";
    }
    else{
        header("Location:fetch_data.php");
    }
}
?>