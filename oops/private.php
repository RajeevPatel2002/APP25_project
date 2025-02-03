<?php
class Test{
    private $a=10;
    private $b=20;
    private function demo(){
        echo "Hello World";
    }
    public function test(){
        echo $this->a+$this->b ;
        echo $this->demo();
    }
}
$test=new Test;
echo $test->test();
?>