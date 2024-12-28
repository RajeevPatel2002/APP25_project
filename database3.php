<?php

$con= mysqli_connect('localhost','root', '', 'rajeevverma');
if($con)
{
    echo "connection stablished";
}
else{
    echo mysqli_connect_error();
}

// $sql = "CREATE TABLE new (id INT(5) PRIMARY KEY AUTO_INCREMENT, name VARCHAR(20), email VARCHAR(25))";
//$sql = "CREATE TABLE user1 (id INT(5) PRIMARY KEY AUTO_INCREMENT, name VARCHAR(20), email VARCHAR(25))";
// echo mysqli_query($con, $sql);

$sql = "CREATE TABLE user2(id INT(5) PRIMARY KEY AUTO_INCREMENT, name VARCHAR(20), email VARCHAR(25) , number int(13));";
// $sql .= "CREATE TABLE user3 (id INT(5) PRIMARY KEY AUTO_INCREMENT, name VARCHAR(20), email VARCHAR(25),number int(13));";
// $sql .= "CREATE TABLE user4   (id INT(5) PRIMARY KEY AUTO_INCREMENT, name VARCHAR(20), email VARCHAR(25),number int(13));";

// echo mysqli_multi_query($con, $sql);


// $sql = "INSERT INTO new(name, email) values('Rajan', 'rajan@gmil.com')";
// $sql = "INSERT INTO new(name, email) values('Rajneesh', 'rajan@gmil.com')";
// $sql = "INSERT INTO new(name, email) values('Rajeev', 'rajan@gmil.com')";
// $sql = "INSERT INTO new(name, email) values('Raj', 'rajan@gmil.com')";
// echo mysqli_query($con, $sql);
// if(mysqli_query($con, $sql))
// {
//     echo "data inserted";
// }
// else{
//     echo "data Notinserted";
// }



// ===============data insert from multiple function================
$sql = "INSERT INTO user2(name, email) values('Rajan', 'rajan@gmil.com');";
$sql .= "INSERT INTO user2(name, email) values('Rajneesh', 'rajan@gmil.com');";
$sql .= "INSERT INTO user2(name, email) values('Rajeev', 'rajan@gmil.com');";
$sql .= "INSERT INTO user2(name, email) values('Raj', 'rajan@gmil.com');";
$sql .= "INSERT INTO user2(name, email) values('Ram', 'rajan@gmil.com');";
$sql .= "INSERT INTO user2(name, email) values('Raja', 'rajan@gmil.com');";

echo mysqli_multi_query($con, $sql);


?>