<?php
$connect = mysqli_connect('localhost', 'root', '', 'app25_crud');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST['fname'])) {
        echo "<script>
    window.alert ('Please enter the first name');
    window.location.href='crud.php';
    </script>";
    } elseif (empty($_POST['lname'])) {
        echo "<script>
    alert ('Please enter the last name');
    window.location.href='crud.php';
    </script>";
    } elseif (empty($_POST['phone'])) {
        echo "<script>
    alert ('Please enter the Phone Number');
    window.location.href='crud.php';
    </script>";
    } elseif (empty($_POST['email'])) {
        echo "<script>
    alert ('Please enter the email');
    window.location.href='crud.php';
    </script>";
    } else {
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
    }

    $sql = "INSERT INTO college(fname, lname, phone, email)
    VALUES ('$fname', '$lname', '$phone', '$email')";
    if (mysqli_query($connect, $sql)) {
        echo "<script>
    alert('Data entered successfully');
    window.location.href='read.php';
    </script>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($connect);
    }
}
