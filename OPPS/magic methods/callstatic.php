<?php

class student
{
	private static $name="Suraj Mishra";
	private static function demo1($a)
	{
		self::$name=$a;
		echo self::$name;
	}
	public static function __callstatic($method,$arg)
	{
		if(method_exists(__CLASS__,$method))
		{
			call_user_func_array([__CLASS__,$method],$arg);
		}
		else
		{
		echo "\nYou can not access private".$method."outside the class";
		}
	}
	
}

student::demo1("Shivay Mishra");

?>