<?php
class Test{
    public $name="Rajeev";
    public $age=22;
    public function demo(){
        echo $this->name."<br/>";
        return"Public method and proerty.<br/>";
    }
}
$test=new Test;
echo $test->name,$test->age;
echo $test->demo();
class Child extends Test{
    public function test(){
     echo $this->name;
    }
}
$Child=new Child;
echo $Child->test();
?>