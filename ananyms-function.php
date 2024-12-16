<!-- which function which have no any name
it is called closer function -->
<?php
$add = function($num1){
    $fact=1;
    for($i=1;$i<=$num1;$i++){
        $fact=$fact*$i;
}
return $fact;
};
echo $add(5);
?>