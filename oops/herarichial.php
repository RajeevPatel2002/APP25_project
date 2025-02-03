<?php 
class Base{
    function demo(){
        echo "This is base class ";
    }
}

class Child extends Base{
    function demo1(){
        echo " This is Derived extends first ";
    }
}
$Child =new Child;
$Child ->demo();
$Child ->demo1();

?>