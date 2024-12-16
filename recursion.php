<?php
// function order($num){
//     if($num>5){
//         return $num;
//     }
//     return order($num+1);
// }
// echo order(1);

function factorial($num){
    if($num<=1){
    return 1;
    }
    return $num*factorial($num-1);
}
echo factorial(5);
?>