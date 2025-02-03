<?php
session_start();
if (!isset($_SESSION['user'])){
  header('Location:login_form.php');
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
<table class="table table-dark table-striped">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">First Name</th>
      <th scope="col">Last name</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
      <th scope="col">Phone</th>
      <th scope="col">Gender</th>
      <th scope="col">Messages</th>
      <th scope="col">Action</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php
    
    $conn = mysqli_connect("localhost","root","","demo2");
    $sql = "select*from data_insert";
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result) > 0){
        while($record = mysqli_fetch_assoc($result)){

    //     }
    // }
    
    ?>
    <tr>
      <th scope="row"><?= $record['id']?></th>
      <td><?= $record['fname']?></td>
      <td><?= $record['lname']?></td>
      <td><?= $record['email']?></td>
      <td><?= $record['password']?></td>
      <td><?= $record['phone']?></td>
      <td><?= $record['gender']?></td>
      <td><?= $record['message']?></td>
      <td><a href="Delete_data.php?id=<?= $record['id']?>" class="btn btn-danger">Delete</a></td>
      <td><a href="Update.php?id=<?= $record['id']?>" class="btn btn-success">Update</a></td>    




    </tr>
  <?php
  }
}
  
  ?>
  </tbody>
</table>
</body>
</html>