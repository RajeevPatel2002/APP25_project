<?php
//////======================$GLOBALS================================
    $x=10;//['x'=>10]
    function demo(){
        echo $GLOBALS['x'];
        $GLOBALS['y']=30;////using this keyword we can define variable globally
    } 
    demo();
    echo "<br>";
    echo $y;
    echo "<br>";
    ////------------------------------------------------------------
?>

<?php
//////======================$_SERVER================================
echo "<pre>";
print_r($_SERVER);////it give all information of server 
echo $_SERVER['REQUEST_METHOD'];
echo "</pre>";
////---------------------------------------------------------------
?>


<?php
//////======================$_REQUEST===============================================

?>