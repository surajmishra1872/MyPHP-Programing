<?php

trait hello
{
	public function hi()
	{
		echo "Hello And Hi from hi function";
	}
}
trait demo
{
	public function hi()
	{
		echo "Hello And Hi from hi function demo traits";
	}
}

class Apple
{
	use hello,demo
	{
		hello::hi insteadof demo; // insteadof is an operator iska matalab kai bajay
		#how to use both function at same time
		
		demo::hi as newfunc; # aliasing same (we can also change function name and access modifier)
	}
}
$obj=new Apple();
$obj->hi();
$obj->newfunc();


?>