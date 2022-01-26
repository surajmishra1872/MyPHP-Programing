<?php

//wap to show access  modifier

class base
{
	public $name="Suraj Kumar Mishra";
	protected $age=19;
	private $fname;
	public function __construct($n)
	{
		$this->fname=$n;
	}
	protected function demo()
	{
		echo"Name of father is :".$this->fname;
		echo PHP_EOL;
	}
}
class derived extends base
{
	function demo1()
	{
		echo $this->age;
		echo PHP_EOL;
		$this->demo();
	}
}
$obj2=new base("Anand Kumar Mishra");
$obj=new derived("Anand Kumar Mishra");
echo $obj->name;
echo PHP_EOL;
echo $obj->demo1();
echo PHP_EOL;


?>