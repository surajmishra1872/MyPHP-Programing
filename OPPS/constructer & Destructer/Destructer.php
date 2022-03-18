<?php

class name
{
	public function __construct()
	{
		echo "this line print from constructer function automatiocally\n";
	}
	public function __construct()
	{
		echo "this line print from constructer function automatiocally 2 \n";
	}
	
	public function suraj()
	{
		echo "helo good morning wake up the sun is risen.\n";
	}
	
	public function __destruct()
	{
		echo "This is destructer function who call automatiocally after the code execution completly\n";
	}
}

$obj=new name();
$obj->suraj();
$obj->suraj();
$obj->suraj();
$obj->suraj();
?>