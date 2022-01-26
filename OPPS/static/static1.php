<?php

class base
{
public static $name="suraj mishra";
public static function basefunc()
{
//echo base::$name;
echo self::$name;
}

}
$obj=new base();
$obj->basefunc();
//$obj->$name();#this is not working
//echo PHP_EOL;
echo self::$name;
//echo PHP_EOL;
//base::basefunc();


?>