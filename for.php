<?php
// for ($i=1;$i<=10;$i++):
//     if ($i==10):
//         echo $i;
//     else:
//         echo "0".$i .",";
//     endif;
// endfor;

// $fact=1;
// for ($i=1;$i<=8;$i++):
//     $fact=$fact*$i;
// endfor;
//     echo $fact;

for ($i=1; $i<=99;$i++) {
    if($i>=10) {
        echo $i;
    } 
    else{
        echo "0".$i;
    }
    if ($i<99) 
    { 
        echo ",";
    }
}
?>
