<?php
$name=["Rajeev","Rajneesh","Rajan"];
$age=["Rajeev"=>22,"Rajneesh"=>21,"Rajan"=>23];
//print_r($name[1]);
//print_r($age["Rajan"]);
foreach($name as $val){
    echo $val."<br>";
}
foreach($age as $key=>$val){
    echo $key." ka age =".$val."<br>";
}
?>