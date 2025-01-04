<?php
$connect = mysqli_connect('localhost', 'root', '', 'personal_data');
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (empty($_POST['name'])) {
        echo "<script>
        alert('Name Field is required');
        </script>";
    } elseif (empty($_FILES['file']['name'])) {
        echo "<script>
        alert('Images Field is required');
        </script>";
    } else {
        $name = $_POST['name'];
        $filename = time() . $_FILES['file']['name'];
        $tmpname = $_FILES['file']['tmp_name'];
        move_uploaded_file($tmpname, "../upload/$filename");
        $sql = "Insert into register(name,file) values('$name','$filename')";
        if (mysqli_query($connect, $sql)) {
            echo "<script>
            alert('Data inserted succesfully');
            window.location.href='read1.php';
            </script> ";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="POST" enctype="multipart/form-data">
        Name : <input type="text" value="" name="name">
        File : <input type="File" value="" name="file">
        <button type="submit">Submit</button>
    </form>
</body>

</html>