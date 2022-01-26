<?php

$name=["suraj","mishra","kumar","shivay","singh","oberoi"];

$num=[1,2,3,4];

array_reduce($name,"myfunction","Mynames");

$res=array_reduce($num,"myfunction1",0);
echo $res;

function myfunction($m,$n)
{
echo $m."   ",$n;
}

function myfunction1($m,$n)
{
echo PHP_EOL;
return $m+$n;
}

?>