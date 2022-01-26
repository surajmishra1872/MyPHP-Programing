<?php

class abc{
private $name="suraj";

public function __get($property)
{
	echo "You are trying to access private or non-existable prperty ($property)";
}

public function __set($property,$value)
{
	echo "You are trying to access/set private or non-existable prperty ($property)";
}
}
$obj=new abc();
$obj->name="Suraj Kumar Mishra";

?>
