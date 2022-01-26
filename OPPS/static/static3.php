<?php

class base
{
	public static $name="Suraj Mishra";
   	function demo2()
	{
	    echo "hello suraj";
	}
}
class derived extends base
{
	public function demo()
	{
		echo "This name inherited from base class: ",parent::$name;
		parent::demo2();
	}
}

$obj=new derived();
$obj->demo();

echo PHP_EOL;
echo PHP_EOL;
echo PHP_EOL;

$obj1=new base();
//$obj1->$name;

?>