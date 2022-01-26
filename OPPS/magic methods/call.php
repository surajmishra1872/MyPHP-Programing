<?php

class student
{
	private $name="Suraj Mishra";
	private function demo1($a)
	{
		$this->name=$a;
		echo $this->name;
	}
	public function __call($method,$arg)
	{
		echo "You can not access private function outside the class";
	}
	
}

$obj=new student();
$obj->demo1("Shivay Mishra");

?>