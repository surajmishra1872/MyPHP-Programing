<?php

class demo1
{
	function demoA()
	{
		echo "say Hello";
	}
}

class demo2
{
	function demoB()
	{
		echo "say Good Knight";
	}
}

function  demo3(demo2 $c)
{
	$c->demoB();
}

$obj=new demo2();
demo3($obj);



?>