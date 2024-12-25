<?php
// localhost ip address 127.0.0.1
// mysqli_connect('hostname','username','password','database')
$connect=mysqli_connect('localhost','root','','app25');
// print_r($connect);
if($connect){
    echo "connection Successfully .";
}
else{
    echo "connection unsuccessfully.";
}
//$sql="Create table user(id int(20) primary key,name varchar(20),email varchar(50),phone int(12))";
//$sql="drop table raj";
// if (mysqli_query($connect,$sql)){
//     echo "Table created";
// }
// else{
//     echo "Table  not to be created";
// }
// $sql="insert into user(id,name,email,phone)values(1,'Rajeev','Rajeev@gmail.com',9889828629)";
// //single value inserte by mysqli_query
// if (mysqli_query($connect,$sql)){
//     echo "Table data inserted";
// }
// else{
//     echo "Table  not to be data inserted";
// }
// $sql="insert into user(id,name,email,phone)values(1,'Rajeev','Rajeev@gmail.com',9889828629)";
// $sql="insert into user(id,name,email,phone)values(2,'Rajeev','Rajeev@gmail.com',9889828629)";
// $sql="insert into user(id,name,email,phone)values(3,'Rajeev','Rajeev@gmail.com',9889828629)";
// $sql="insert into user(id,name,email,phone)values(4,'Rajeev','Rajeev@gmail.com',9889828629)";

// //multi value inserte by mysqli_query
// if (mysqli_multi_query($connect,$sql)){
//     echo "Table data inserted";
// }
// else{
//     echo "Table  not to be data inserted";
// }

$sql="insert into user(id,name,email,phone)values(5,'Rajeev','Rajeev@gmail.com',9889828629)";

if (mysqli_query($connect,$sql)){
    echo mysqli_insert_id($connect);
}
?>