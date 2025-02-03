<?php
class Test{
    protected $name="Rajeev";
    protected function demo(){
        echo "Hello This Is Protected Property";
    }
    public function all(){
        echo $this->name;
        echo $this->demo();
    }
}
$test =new Test;
echo $test ->all();

class child extends Test{
    function hello(){
        echo "Hii";
        echo $this->demo();
    }
}
?>