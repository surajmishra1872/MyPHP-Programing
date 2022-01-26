<?php

//wap in php to show, Instance Variable and Instance

class Test
{

var $a=10; // instance variable
var $b=20; // instance variable
var $c=30; // instance variable

}

$test=new Test();
var_dump($test); //Instance or Object

var_dump($test instanceof Test); // instanceof Operator : used to check if the given Object is instance of Test or not.
var_dump($x instanceof Test);
?>