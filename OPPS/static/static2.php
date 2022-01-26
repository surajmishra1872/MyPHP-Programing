<?php

class base
{
public static $name="suraj mishra";
public static function basefunc()
{
echo self::$name;
}
public function __construct($n)
{
	
	self::$name=$n;
}
}
$obj=new base("kishan mishra");
$obj->basefunc();
echo PHP_EOL;
base::basefunc();


?>