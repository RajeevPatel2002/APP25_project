<?php

////method overrididing 
class Base{
    public function firstmethod(){
        echo "this is base class method";
    }
}
class Child extends Base{
    public function firstmethod(){
        echo "this is child class method";
    }
}
$child=new Child;
$child->firstmethod();
?>