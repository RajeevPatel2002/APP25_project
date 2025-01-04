<?php 
    foreach($_FILES['file']['name']as $key=>$val){
        move_uploaded_file($_FILES['file']['tmp_name'][$key],"../upload/$val");
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
        File : <input type="File" value="" name="file[]"multiple>
        <button type="submit">Submit</button>
    </form>
</body>

</html>