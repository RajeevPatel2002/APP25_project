<?php
session_start();
if(!isset($_SESSION['user'])){
  header('Location:login.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Table with Delete Button</title>
  <style>
    /* styles.css */
body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;
  background-color: #f8f9fa;
}

.table-container {
  margin: 50px auto;
  max-width: 800px;
  padding: 20px;
  background: #fff;
  border-radius: 8px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

table {
  width: 100%;
  border-collapse: collapse;
}

thead {
  background-color: #007bff;
  color: #fff;
}

th, td {
  text-align: left;
  padding: 12px;
  border: 1px solid #ddd;
}

tbody tr:nth-child(odd) {
  background-color: #f9f9f9;
}

tbody tr:hover {
  background-color: #f1f1f1;
}

th {
  font-size: 1.1em;
}

td {
  font-size: 1em;
}

.delete-btn {
  padding: 8px 12px;
  font-size: 0.9em;
  color: #fff;
  background-color: #dc3545;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  transition: background-color 0.3s;
}

.delete-btn:hover {
  background-color: #c82333;
}

  </style>
</head>
<body>

  <div class="table-container">
    <table>
    <a href="form.php">insert new data</a>
      <thead>
        <tr>
            <th>id</th>
          <th>First Name</th>
          <th>Last Name</th>
          <th>Phone</th>
          <th>Email</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <?php
        //// reading data from table
        $con=mysqli_connect('localhost','root','','users_crud');
        $sql = "Select*from formdata";
        $result = mysqli_query($con,$sql);
        if(mysqli_num_rows($result)>0){
            while($record=mysqli_fetch_assoc($result)){
        ?>
        <tr>
            <td><?= $record['id']?></td>
          <td><?= $record['fname']?></td>
          <td><?= $record['lname']?></td>
          <td><?= $record['number']?></td>
          <td><?= $record['email']?></td>
          <td>
            <button class="delete-btn">
                <a href="delete.php?id=<?= $record['id']?>">Delete</a>
            </button>
        </td>
        </tr>
        <?php
            }
        }
        ?>
        <br><br><br>
        <a href="logout.php" id="logout">logout</a>
      </tbody>
    </table>
  </div>
  <script>
      var log =document.getElementById('logout');
      setTimeout(()=>{
        log.click();
      },10000
    );
  </script>
</body>
</html>
