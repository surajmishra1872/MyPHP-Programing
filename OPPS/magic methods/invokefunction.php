<?php

class calculation
{
	public $a;
	public $b;
	public function __construct($a,$b)
	{
		$this->a=$a;
		$this->b=$b;
	}
	public function sum()
	{
		echo "Sum of Number is:".($this->a+$this->b);
	}
	public function __invoke()
	{
		echo "\nThis is invoke function";
		echo "\nSum of Number Inside Invoke Function :".($this->a+$this->b);
	}
}

$obj=new calculation(10,40);
$obj->sum();
$obj();



?>