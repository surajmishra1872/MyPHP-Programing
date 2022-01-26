<?php

interface A
{
	function Add($a,$b);
}
interface B
{
	function Sub($a,$b);
}

class C implements A,B
{
	//function Add($a,$b)
	function Add($b,$c)
	{
		echo "Sum of Number is: ".($b+$c);
	}
	function Sub($b,$c)
	{
		echo "Substraction of Number is: ".($b-$c);
	}
}
$obj=new C();
$obj->Add(5,6);
$obj->Sub(6,2);

?>