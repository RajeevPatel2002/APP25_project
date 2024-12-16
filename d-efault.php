<?php
function defaultpara($age=17){
if($age<18){
    return "Eligible For Vote";
}
else{
    return "Not Eligible For Vote";
}
}
echo defaultpara();
?>