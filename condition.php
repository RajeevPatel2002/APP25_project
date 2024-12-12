<?php
// $var=100;
// if($var !=100 && $var===100){
//     echo "Equal";
// }
// elseif(!$var){
//     echo "Again Equal";
// }
// elseif($var>10 || $var<10){
//     echo "Hello";
// }
// else{
//     echo "Aa gye";
// }
// ==========================================
// $a=10;
// if($a++==10 && ++$a !=12):
//     echo "Jai Lankesh";
// elseif($a-- + ++$a > 20):
//     echo "Ka Ho Ravan ChaCha";
// else:
//     echo "Hello";
// endif;
//====================================
$a=10;
if($a++==10 && ++$a !=12):
    echo "Jai Lankesh";
elseif($a-- + ++$a == 24):
    echo "Ka Ho Ravan ChaCha";
    elseif($a- $a++ + --$a == 25):
        echo "Ka Ho Ravan ChaCha";
else:
    echo $a;
endif;
?> 