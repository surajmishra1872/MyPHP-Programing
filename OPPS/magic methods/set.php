<?php

class abc{
private $name="suraj";

public function __set($property,$value)
{
	echo "You are trying to access private or non-existable prperty ($property)";
}
}
$obj=new abc();
$obj->name="Suraj Mishra";

?>