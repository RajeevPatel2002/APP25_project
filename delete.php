<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $connect = mysqli_connect('localhost', 'root', '', 'app25_crud');
    $sql = "delete from college where id= $id";
    if (mysqli_query($connect, $sql)) {
        echo "
                <script>
                    alert('Data Deleted Successfully');
                    window.location.href = 'read.php';
                </script>
            ";
    } else {
        header('Location:read.php');
    }
}
