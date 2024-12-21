<?php
////==============local varriable=========================================
function demo(){
    $x=10;
    $y=111;
    echo $x." ".$y;
}
// echo $x; ////here is a error because we are try to access the variable which  define in a function
demo();
?>

<?php
////==============globle varriable=========================================
$a=10;
echo "<br>";
function globlevar(){
    global $a;///this keyword is use for accessing global variable if we not use this then it will show error
    echo $a;
}
globlevar();
echo "<br>";
echo "this is a globle variable :".$a;
echo "<br>";
?>

<?php
////==============static varriable=========================================
function staticvar(){
    static $a=10; ////static variable does not release memory at end of execuition and hold the last value ;
    $a=$a+4;
    echo $a;
}
staticvar();//output=14
echo "<br>";
staticvar();//output=18
echo "<br>";
staticvar();//output=22
echo "<br>";
echo $a;
?>