<?php
abstract class Test{
    abstract function demo($a);
}
class Demo extends Test{
    public function demo($b){
        echo "This is abstract method $b";
    }
    public function hello(){
        echo"This is second class";
    }
}
$demo =new demo;
$demo->demo("Right");
?>