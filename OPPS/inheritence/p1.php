<?php

class employee
{
	public $name;
	public $age;
	public $salary;
	
	public function __construct($a,$b,$c)
	{
		$this->name=$a;
		$this->age=$b;
		$this->salary=$c;
	}
	public function info()
	{
		echo "<h1>Employee Details</h1>";
		echo PHP_EOL;
		echo"<h3>Employee Name is :  ".$this->name."</h3><br/>";
		echo"<h3>Employee age is :  ".$this->age."</h3><br/>";
		echo"<h3>Employee salary is :  ".$this->salary."</h3><br/>";
	}
}

class manager extends employee
{
	public $ta=1000;
	public $da=2000;
	public $phone=500;
	public $totalsalary;
	
	public function info()
	{    
	     $this->totalsalary=$this->salary+$this->ta+$this->da+$this->phone;
		echo "<h1>Manager Details</h1>";
		echo PHP_EOL;
		echo"<h3>Employee Name is :  ".$this->$name."</h3><br/>";
		echo"<h3>Employee age is :  ".$this->$age."</h3><br/>";
		echo"<h3>Employee salary is :  ".$this->$totalsalary."</h3><br/>";
	}
}

$obj1=new employee("Suraj Mishra",20,15000);
$obj1->info();
echo "\n";
$obj2=new employee("Kishan Mishra",30,30000);
$obj2->info();

?>