<?php
if(!isset($_SESSION['user'])){
    header('Location:login.php');
}

///// database se data delete kerna
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $conn = mysqli_connect('localhost','root','','users_crud');
        $sql = "delete from formdata where id= $id";
        if(mysqli_query($conn, $sql)){
            echo "
                <script>
                    alert('Data Deleted Successfully');
                    window.location.href = 'read.php';
                </script>
            ";
        }
    }else{
            header('Location:read.php');
   }

?>