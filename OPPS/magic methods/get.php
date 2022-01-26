<?php

class name
{
	public $a="Suraj";
	private $b="Mishra's";
	
	private function second()
	{
		echo "This page says:'I am second'";
	}
	
	public function __get($property)
	{
		echo "You are calling non accessble property($property)";
	}
}

$obj=new name();
//$obj->first();
$obj->second();

?>