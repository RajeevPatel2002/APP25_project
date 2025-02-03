<?php
trait hello{
    public function demo(){
        echo "hello this is best traits";
    }
}
class Demo{
    use hello;
}
$demo=new Demo;
$demo->demo();
?>