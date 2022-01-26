<?php

//include 'hello.php';
require 'hello.php';
require 'hi.php';

$obj1=new hello\name();
$obj2=new hi\name();

function sun()
{
	echo"This function says Wake Up The Sun is risen...(combine Page..)\n";
}
sun();
hello\sun();

?>