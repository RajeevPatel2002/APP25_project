<?php
$connect=mysqli_connect('localhost','root','','verma');

print_r($connect);
if($connect){
    echo "connection Successfully .";
}
else{
    echo "connection unsuccessfully.";
 }
$sql="Create table student(id int(20) primary key auto_increment, name varchar(20),email varchar(50),phone bigint(12))";
// if(mysqli_query($connect,$sql)){
//     echo "Table created";
// }
// else{
//     echo "Table  not to be created";
// }
// $sql="insert into student(id,name,email,phone)values(1,'Rajeev','Rajeev@gmail.com',9889828629)";
// ////single value inserte by mysqli_query
// if (mysqli_query($connect,$sql)){
//     echo "Table data inserted";
// }
// else{
//     echo "Table  not to be data inserted";
// }
$sql="insert into student(id,name,email,phone)values(2,'Rajeev verma','Rajeevpatel@gmail.com',9838681571)";
$sql="insert into student(id,name,email,phone)values(3,'patel','patel@gmail.com',9889822019)";
$sql="insert into student(id,name,email,phone)values(4,'Rajeev patel','Rpatel@gmail.com',9889827339)";
$sql="insert into student(id,name,email,phone)values(5,'verma Rajeev','verma@gmail.com',9889261909)";
$sql="insert into student(id,name,email,phone)values(6,'chaudhary Rajeev','chaudhary@gmail.com',9889828929)";
//multi value inserte by mysqli_query
if (mysqli_multi_query($connect, $sql)) {
    echo "Table data inserted";
} 
else {
    echo "Error: " . mysqli_error($connect);
}

$sql="insert into student(id,name,email,phone)values('Rajeev','Rajeev@gmail.com',9889828629)";

if (mysqli_query($connect,$sql)){
    echo mysqli_insert_id($connect);
}
?>