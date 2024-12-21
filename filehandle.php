<?php
// readfile("hii.txt");// read the file
//$data =fopen("hii.txt","r");// open the file
//echo fread($data,100);
//echo fread($data,filesize("hii.txt"));
//echo fgets($data);// get the data file
//echo fgetc($data);// get the first character of data file
// while (!feof($data)) {
//     echo fgetc($data);
// }
// $res=fopen("demo.txt","w");// write the file
// $data="my name is rajeev patel";
// echo fwrite($res,$data);
// fclose($res); //close the file
// $res=fopen("demo.txt","a");
// fwrite($res,"This is a demo file");
// fclose($res);
// $res=fopen("demo.txt","r+");// read and write file
// echo fread($res,filesize("hii.txt"));
// fwrite($res," this is read + write file opertaions");
// $res=fopen("demo1.txt","w+");// write and read file
// fwrite($res,"write file opertaions + this is read ");
// fseek($res,0);
// echo fread($res,filesize("demo1.txt"));

fclose($res);
// fclose($data);
?>