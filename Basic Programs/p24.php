<?php

//wap to find factorial of number using recursion

function demo($a)
{
if($a==0)
{
return 1;
}
else
{
return $a*demo($a-1);
}
}

echo "factorial of number is:".demo(5);



// wap in php to show table of number using recursion
/*
function demo($a)
{
if($a<=10)
{
echo $a;
echo PHP_EOL;
demo($a+1);
}
}
 
echo demo(1);
*/
?>