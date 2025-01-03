<?php
$connect = mysqli_connect('localhost', 'root', '', 'personal_data');
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (empty($_POST['name'])) {
        echo "<script>
        alert('name is required');
        </script>";
    } elseif (empty($_POST['Address'])) {
        echo "<script>
         alert('please fill Address');
        </script>";
    } elseif (empty($_POST['country'])) {
        echo "<script>
        alert('please fill country');
        </script>";
    } elseif (empty($_POST['gender'])) {
        echo "<script>
        alert('please fill gender');
        </script>";
    } elseif (empty($_POST['room'])) {
        echo "<script>
       alert('please fill room');
        </script>";
    }
    if (empty($_POST['description'])) {
        echo "<script>
        alert('please fill description');
        </script>";
    } else {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $Address = $_POST['address'];
        $country = $_POST['country'];
        $gender = $_POST['gender'];
        $room = implode(',', $_POST['room']);
        $description = $_POST['description'];
        $sql = "update rooms set name='$name',address='$Address',country='$country',gender='$gender',room='$room',description='$description' where id=$id";
        if (mysqli_query($connect, $sql)) {
            echo "<script>
            alert('data updated successfilly');
            window.location.href='read1.php';
            </script>";
        }
    }
}
?>
<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "select * from rooms where id ='$id'";
    if ($res = mysqli_query($connect, $sql)) {
        $data = mysqli_fetch_assoc($res);
        $room = explode(',', $data['room']);

?>

        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Form Example</title>
            <style>
                body {
                    font-family: Arial, sans-serif;
                    margin: 0;
                    padding: 20px;
                    background-color: #f9f9f9;
                }

                .form-container {
                    max-width: 400px;
                    margin: 0 auto;
                    padding: 20px;
                    background-color: #fff;
                    border: 1px solid #ddd;
                    border-radius: 8px;
                    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
                }

                .form-container h2 {
                    margin-bottom: 15px;
                    text-align: center;
                }

                .form-group {
                    margin-bottom: 15px;
                }

                .form-group label {
                    display: block;
                    margin-bottom: 5px;
                    font-weight: bold;
                }

                .form-group input,
                .form-group textarea,
                select,
                .form-group button {
                    width: 100%;
                    padding: 10px;
                    border: 1px solid #ccc;

                    border-radius: 4px;
                }

                .form-group textarea {
                    resize: none;
                }

                .form-group .checkbox-group,
                .form-group .radio-group {
                    display: flex;
                    gap: 10px;
                }

                .form-group button {
                    background-color: #28a745;
                    color: #fff;
                    border: none;
                    cursor: pointer;
                }

                .form-group button:hover {
                    background-color: #218838;
                }
            </style>
        </head>

        <body>
            <div class="form-container">
                <h2>UPDATE ROOM DATA</h2>
                <form method="post">
                    <div class="form-group">
                        <input type="hidden" name="id" value=" <?= $data['id'] ?>">
                        <label for="name">Name</label>
                        <input type="text" id="name" name="name" placeholder="Enter your name" value="<?= $data['name'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="Address">
                            <Address></Address>
                        </label>
                        <input type="text" id="Address" name="address" value=" <?= $data['address'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="select">select country</label>
                        <select name="country" id="">
                            <option value="">select</option>
                            <option <?= $data['country'] == 'india' ? 'selected' : '' ?> value="india">india</option>
                            <option <?= $data['country'] == 'nepal' ? 'selected' : '' ?> value="nepal">nepal</option>
                            <option <?= $data['country'] == 'china' ? 'selected' : '' ?> value="china">china</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Choose Your Gender</label>
                        <div class="radio-group">
                            <label><input type="radio" name="gender" value="male" <?= $data['gender'] == 'male' ? 'checked' : '' ?>> Male</label>
                            <label><input type="radio" name="gender" value="female" <?= $data['gender'] == 'female' ? 'checked' : '' ?>> Female</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Room</label>
                        <input type="checkbox" name="room[]" value="AC room" <?= in_array('AC room', $room) ? 'checked' : '' ?>> Ac room

                        <input type="checkbox" name="room[]" value="Non Ac room" <?= in_array('Non Ac room', $room)?'checked':'' ?> > Non Ac room

                        <input type="checkbox" name="room[]" value="Sweet room" <?= in_array('Sweet room', $room) ? 'checked' : '' ?>> Sweet room

                    </div>
                    <div class="form-group">
                        <label for="message">Your Message</label>
                        <textarea id="message" name="description" rows="4" placeholder="Write your message here..."><?= $data['description'] ?></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit">update</button>
                    </div>
                </form>
            </div>
        </body>

        </html>
<?php
    }
}
?>