<?php
class Test{
    public $name;
    public function demo(){
        echo $this->name;
        echo "hello world";
    }
}
$test=new Test;
$test->name="Rajeev";
$test->demo();
?>