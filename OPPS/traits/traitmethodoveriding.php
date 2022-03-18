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
		echo "Hello And Hi from hi function";
	}
}

class Apple
{
	use hello,demo
	{
		hello::hi insteadof demo;
	}
}
$obj=new Apple();
$obj->hi();

8577841387


?>