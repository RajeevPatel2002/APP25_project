<?php
interface Test{
    public function demo();
    public function hello();
}
class Demo implements Test{
    public function hii(){
        echo "hii";
    }
    public function demo(){
        echo "demo";
    }
    public function hello(){
        echo "hello";
    }
}
$demo =new Demo;
$demo ->hii();
$demo ->demo();
$demo ->hello();

?>