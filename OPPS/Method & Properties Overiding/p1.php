<?php

class parents
{
	public $name="This class name is Parents Class.\n";
	public function demo()
	{
		echo "This is demo function inside parents class. \n";
		echo $this->name;
	}
}
class child
{
	public $name="This is class name in Child Class.\n"; # This is Properties Overiding
	public function demo() #This is method Overiding
	{
		echo "This is demo function inside child class.\n";
		echo $this->name;
	}
}

$obj1=new parents();
$obj1->name;
$obj1->demo();
$obj2=new child();
$obj2->name;
$obj2->demo();
?>