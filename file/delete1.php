<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $connect = mysqli_connect('localhost', 'root', '', 'personal_data');
    $sql = "delete from register where id=$id";
    if (mysqli_query($connect, $sql)) {
        echo "<script>
            alert('Data Deleted Successfully');
            window.location.href='read1.php';
        </script>";
    }
    else{
        header('location:read1.php');
    }
}
?>