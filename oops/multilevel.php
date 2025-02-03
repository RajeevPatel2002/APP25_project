<?php 
class Dada{
    function demo(){
        echo "This is base class ";
    }
}

class Papa extends Dada{
    function demo1(){
        echo " This is Derived extends dada class ";
    }
}
class Beta extends Papa{
    function demo2(){
        echo " This is Derived extends papa class ";
    }
}
$beta =new Beta;
$beta ->demo();
$beta ->demo1();
$beta ->demo2();

?>