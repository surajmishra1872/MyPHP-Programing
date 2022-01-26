<?php

trait demo{
	
	public function sayhello1()
	{
		echo "This is hello 1";
	}
	public function sayhello2()
	{
		echo "This is hello 2";
	}
	
}
trait demo2{
	
	public function sayhello3()
	{
		echo "This is hello 3";
	}
	public function sayhello4()
	{
		echo "This is hello 4";
	}
	
}


class A
{
	use demo,demo2;
}
class B extends A
{
	use demo;
}
$obj=new B();
$obj->sayhello1();
$obj->sayhello2();
$obj->sayhello3();
$obj->sayhello4();


?>