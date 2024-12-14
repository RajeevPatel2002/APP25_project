<?php
//Normal return Type

// function hello(){
//     // echo "Hello Techsima";
//     for($i=0;$i<=10;$i++){
//          echo $i."<br>";
//     }
// }
// echo hello();
//// No Parameterize Function
// No Argument with return type

// function hello(){
//     for($i=0;$i<=10;$i++){
//         $a[]= $i."<br>";
//     }
//     return $a;
// }
// print_r (hello());

// Parametrize Function
// function add($a,$b,$c){
//     if($c=='+'){
//         echo($a+$b);
//     }
//     elseif($c=='-'){
//         echo($a-$b);
//     }
//     elseif($c=='*'){
//         echo($a*$b);
//     }
//     elseif($c=='/'){
//         echo($a/$b);
//     }
//     elseif($c=='%'){
//         echo($a%$b);
//     }
//     else{
//         echo "Beta Bhut Harami Ho";
//     }
// }
// add(3,7,'$');


// function Table($a){
//     For($i=1;$i<=10;$i++){
//         echo $a*$i."<br>";
//     }
// }
// Table(2);
// function Name(){
//     $a="Rajeev";
//     echo strrev($a);
// }
// Name();


// function Name($b) {
//     if (ctype_lower($b)) {
//         echo "This is LowerCase";
//     } 
//     elseif (ctype_upper($b)) {
//         echo "This is UpperCase";
//     } 
//     else {
//         echo "Shi Se Naam Daalo Ya to lowercase Or Uppercase";
//     }
// }
// Name("Rajeev");

function Prime($num) {
    if ($num > 1) {
        for ($i=2;$i<=$num/2;$i++) { 
            if ($num % $i==0) {
             return "This Number Is Not Prime";
            }
        }
        return"This Number Is Prime";
        }
        else{
            return "This number is Not Prime";
        }
    }
echo Prime(11);
?>

