<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>batch</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        * {
            margin: 0px;
            padding: 0px;
            box-sizing: border-box;
            font-family: Arial, Helvetica, sans-serif;
        }

        .admin-batch-container {
            min-height: 300px;
            width: 80%;
            background: #f5f0ed;
            margin: 50px auto;
            padding-bottom: 50px;

        }

        .a {
            text-decoration: none;
            font-size: 30px;
            padding: 20px;
        }

        .admin-batch-tableOuter {
            width: 98%;
            padding: 20px;
            border-collapse: collapse;
            margin: auto;
        }

        th {
            border: 1px solid rgb(83, 82, 82);
            padding: 10px;
            background: #153450;
            color: #fff;
        }


        td {
            height: 40px;
            border: 1px solid #000;
            text-align: center;
        }

        a {
            text-decoration: none;
        }
    </style>
</head>

<body>
    <div class="admin-batch-container">
        <a class="a" href="crud.php">change data</a>
        <table class="admin-batch-tableOuter">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Phone Number</th>
                    <th scope="col">Email</th>
                    <th scope="col">Delete Data</th>
                    <th scope="col">Update Data</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $con = mysqli_connect('localhost', 'root', '', 'app25_crud');
                $sql = "select * from college";
                $result = mysqli_query($con, $sql);
                if (mysqli_num_rows($result) > 0) {
                    while ($record = mysqli_fetch_assoc($result)) {

                ?>
                        <tr>
                            <td scope="row"><?= $record['id'] ?></td>
                            <td><?= $record['fname'] ?></td>
                            <td><?= $record['lname'] ?></td>
                            <td><?= $record['phone'] ?></td>
                            <td><?= $record['email'] ?></td>
                            <td><a href="delete.php ?id=<?= $record['id'] ?>">Delete</a></td>
                            <td><a href="update.php ?id=<?= $record['id'] ?>">Update</a></td>
                        </tr>
                <?php
                    }
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>