<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $connect = mysqli_connect('localhost', 'root', '', 'personal_data');
    $sql = "delete from multifile where id=$id";
    if (mysqli_query($connect, $sql)) {
        echo "<script>
            alert('Data Deleted Successfully');
            window.location.href='read2.php';
        </script>";
    }
    else{
        header('location:read2.php');
    }
}
?>