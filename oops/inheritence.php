<?php 
class Base{
    public function firstMethod(){
        echo "This is base class";
    }
}
//New Base
class Derived extends base{
    public function firstMethod(){
        echo "This is Derived extends base class";
    }

public function base(){
    parent::firstMethod();
}
}
$derived = new derived;
$derived -> demo();
?>