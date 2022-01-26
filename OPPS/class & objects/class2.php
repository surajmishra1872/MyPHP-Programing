<?php

class functions
{

var $a=10;
var $b=20;
var $c;

function sum()
{
return $this->a+$this->b;
}
function subs()
{
return $this->a-$this->b;
}
function div()
{
return $this->a/$this->b;
}
function multi()
{
return $this->a*$this->b;
}
}

$obj=new functions();
echo "Sum of numbers is : ".$obj->sum().PHP_EOL;
echo "Substraction of numbers is : ".$obj->subs().PHP_EOL;
echo "Divion of numbers is : ".$obj->div().PHP_EOL;
echo "Multi of numbers is : ".$obj->multi().PHP_EOL;

?>