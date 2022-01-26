<?php

//require "classes\hello.php";
//require "classes\second.php";

function __autoload($xyz)
{
	require "classes/".$xyz.".php";
}

$obj1=new hello();
$obj2=new shivay();



?>