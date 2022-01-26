<?php
/*

Note: if we want to accesss data members and functions of derived class in parent class ,we use static bindig technique. 
in this technique we use static keyword in parent class and :: operator to access data member. 

*/



class base
{
	public static $name="Suraj Mishra";
	public function show()
	{
		echo self::$name;
		echo PHP_EOL;
		echo PHP_EOL;
		echo static::$name;
		echo PHP_EOL;
		echo PHP_EOL;
		echo static::$names;
	}
}
class derived extends base
{
	public static $name="Anand Mishra";
	public static $names="Anand Mishra";
}

$obj=new derived();
$obj->show();

?>