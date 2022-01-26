<?php

//pass argument as refrence

function demo($a)
{
$a+=5;
}

function demo1(&$a)
{
$a+=5;
}

$b=10;
demo($b);
echo $b;
echo "\nAfter Refrence variable\n".
demo1($b);
echo $b;

?>