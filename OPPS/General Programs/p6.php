<?php

//wap to show variables and methods  in php.

class test
{

var $a=10;
var $b=20;

function add()
{
echo 'This is a add function'.PHP_EOL;
//echo (new Test)->a+(new Test)->b;
echo $this->a+$this->b;
}
 // $this ka scope class kai under hota hai hai aur object ka scope class kai bahar hota hai.
}

$test=new test();
$test->add();

?>