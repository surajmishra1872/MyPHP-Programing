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
		if(method_exists($this,$method))
		{
			call_user_func_array([$this,$method],$arg);
		}
		else
		{
		echo "\nYou can not access private".$method."outside the class";
		}
	}
	
}

$obj=new student();
$obj->demo1("Shivay Mishra");
$obj->demo2("Shivay Mishra");

?>