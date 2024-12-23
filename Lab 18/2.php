<?php
$a=7;
function addtwonum(){
    $b=5;
    $GLOBALS['result']=$GLOBALS['a']+$b;


}
addtwonum();
echo "Result of addition a and b is : " . $result;
?>