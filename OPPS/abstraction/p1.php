<?php

/*

Abstract class : abstract class ka use karne se hme 
class ka object nhi banana padta hai.
lekin  hme do condition fallow karna jaruri hai
1.abstract method inside class is compulsury(declaration)
2.implement abstract method inside derived class mendotory.(definition)

abstractaction ka use karne kai liye hme abstract keyword ka use karna padta hai.

abstract method ki declaration to hoti hai lekin definition derived class mai hoti hai.

// abstract class ka object nhi bna sakte hai. 

*/

abstract class demo1
{
	public $name;
	public function __construct($n)
	{
		$this->name=$n;
		echo $this->name;
	}
	abstract function demofunc()
	
}

class demo2 extends demo1
{
	public function demofunc()
	{
		echo "\nthis is public demofunction";
	}
}

$obj=new demo1("suraj");
$obj->demofunc();












?> 