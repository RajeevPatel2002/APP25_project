<?php
$conn = mysqli_connect('localhost', 'root', '', 'personal_data');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['uid'];
    $oldImg = $_POST['old_img'];

    if (empty($_FILES['file']['name'])) {
        foreach ($_FILES['file']['name'] as $key => $val) {
            move_uploaded_file($_FILES['file']['tmp_name'][$key], "../upload/$val");
        }
    } else {
        foreach ($_FILES['file']['name'] as $key => $val) {
            move_uploaded_file($_FILES['file']['tmp_name'][$key], "../upload/$val");
        }
        $file = implode(',', $_FILES['file']['name']);
        $sql = "update multifile set file='$file' where id=$id";
        if (mysqli_query($conn, $sql)) {
            echo "
            <script>
                alert('updated successfully');
                window.location.href='read2.php';
            </script>
           ";
        }
    }
}


if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM multifile WHERE id=$id";
    $res = mysqli_query($conn, $sql);
    if (mysqli_num_rows($res) > 0) {
        $record = mysqli_fetch_assoc($res);

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
                <input type="hidden" name="uid" value="<?= $record['id'] ?>">
                <input type="hidden" name="old_img" value="<?= $record['file'] ?>">
                <input type="file" name="file[]" multiple>
                <button type="submit">upload</button>
            </form>
        </body>

        </html>

<?php
    }
} else {
    header('Location:read2.php');
}
?>