<?php

class abc{
private $name="suraj";

public function __get($property)
{
	echo "You are trying to access private or non-existable prperty ($property)";
}

public function __set($property,$value)
{
	if(property_exists($this,$property))
	{
		$this->$property=$value;
		echo $this->name;
	}
	else
	{
	echo "You are trying to access/set private or non-existable prperty ($property)";
	}
}
}
$obj=new abc();
$obj->name="Suraj Kumar Mishra";

?>
