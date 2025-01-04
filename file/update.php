<?php
$connect = mysqli_connect('localhost', 'root', '', 'personal_data');
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $oldfile = $_POST['oldname'];
    if (empty($_FILES['file']['name'])) {
        $filename = $oldfile;
    } else {
        $filename = time() . $_FILES['file']['name'];
        $tempname = $_FILES['file']['tmp_name'];
        move_uploaded_file($tempname, "../upload/$filename");
    }

    $sql = "update upload_data set name='$name',file='$filename' where id=$id";
    if (mysqli_query($connect, $sql)) {
        echo "<script>
            alert('data updated successfully');
            window.location.href='read.php';
            </script>";
    }
}
?>

<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "select * from upload_data where id=$id";
    if ($record = mysqli_query($connect, $sql)) {
        $res = mysqli_fetch_assoc($record);
    }
} else {
    echo "bye bye";
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
    <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" value="<?= $res['id'] ?>" name="id">
        Name : <input type="text" name="name" value="<?= $res['name'] ?>">
        File : <input type="file" name="file" value="">
        <input type="hidden" name="oldname" value="<?= $res['file'] ?>">
        <img src="../upload/<?= $res['file'] ?>" alt="" height="50px" width="50px">
        <button type="submit">submit</button>
    </form>

</body>

</html>