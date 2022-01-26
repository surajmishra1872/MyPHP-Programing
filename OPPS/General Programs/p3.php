<?php

// wap in php to show object Making

class Test
{

var $a=10;
var $b=20;
var $c=30;

}

$test=new Test(); // instantiation or //heap
var_dump($test);
$test=Test(); // Assignment // stack
var_dump($test);
$test=10;
var_dump($test);

function Test()
{

return "Hy from Test Function";

}

?>