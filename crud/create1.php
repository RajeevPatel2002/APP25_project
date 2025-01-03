<?php
$connect = mysqli_connect('localhost', 'root', '', 'personal_data');
// if($connect){
//     echo"Connection Success";
// }
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (empty($_POST['name'])) {
        echo "<script>
            alert('Name Field is recuried');
            </script>";
    } elseif (empty($_POST['Address'])) {
        echo "<script>
            alert('Date of Birth Field is recuried');
            </script>";
    } elseif (empty($_POST['country'])) {
        echo "<script>
            alert('country Field is recuried');
            </script>";
    } elseif (empty($_POST['gender'])) {
        echo "<script>
            alert('gender Field is recuried');
            </script>";
    } elseif (empty($_POST['room'])) {
        echo "<script>
            alert('Room Field is recuried');
            </script>";
    } elseif (empty($_POST['description'])) {
        echo "<script>
            alert('description Field is recuried');
            </script>";
    } else {
        $name = $_POST['name'];
        $Address = $_POST['Address'];
        $country = $_POST['country'];
        $gender = $_POST['gender'];
        $room = implode(",", $_POST['room']);
        $description = $_POST['description'];
    }
    $sql = "INSERT INTO rooms(name, Address, country, gender, room, description)
                VALUES ('$name', '$Address', '$country', '$gender', '$room', '$description')";
    if (mysqli_query($connect, $sql)) {
        echo "<script>
    alert('Data entered successfully');
    window.location.href='read1.php';
    </script>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($connect);
    }
}
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
        <h2>Room Booking Form</h2>
        <form action="create1.php" method="post">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" placeholder="Enter your name">
            </div>
            <div class="form-group">
                <label for="Address">Address</label>
                <input type="text" id="Address" name="Address">
            </div>
            <div class="form-group">
                <label for="select">select country</label>
                <select name="country" id="">
                    <option value="">select</option>
                    <option value="india">india</option>
                    <option value="nepal">nepal</option>
                    <option value="nepal">China</option>
                </select>
            </div>
            <div class="">
                <label><b>Choose Your Gender</b></label>
                <div class="radio-group">
                    <label><input type="radio" name="gender" value="male"> Male</label>
                    <label><input type="radio" name="gender" value="female"> Female</label>
                </div>
            </div>
            <div class="">
                <label><b>Room</b></label>
                <input type="checkbox" name="room[]" value="AC room"> AC room
                <input type="checkbox" name="room[]" value="Non Ac room"> Non Ac room
                <input type="checkbox" name="room[]" value="Sweet room"> Sweet room

            </div>
            <div class="form-group">
                <label for="message">Your Message</label>
                <textarea id="message" name="description" rows="4" placeholder="Write your message here..."></textarea>
            </div>
            <div class="form-group">
                <button type="submit">Submit</button>
            </div>
        </form>
    </div>
</body>

</html>