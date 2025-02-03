<?php 
class Demo{
    function __construct(){
        echo "Hello Techsima";
    }
    function __destruct(){
        echo "Bye Bye Techsima";
    }
}
$demo = new Demo;
?>