<?php
$a=10;
function demo()
{
     global $a;
     echo "\nThe value of number inside function  is:".$a;
}

echo "\nThe value of number outside of function is:".$a;

demo();
?>