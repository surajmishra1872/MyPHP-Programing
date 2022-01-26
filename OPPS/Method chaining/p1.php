<?php

class demo
{
	public function A()
	{
		echo "This is function A\n";
		return $this;
	}
	public function B()
	{
		echo "This is function B\n";
		return $this;
	}
	public function C()
	{
		echo "This is function C\n";
		return $this;
	}
	public function D()
	{
		echo "This is function D\n";
		return $this;
	}
	public function E()
	{
		echo "This is function E\n";
		
	}
	
}

$obj=new demo();
$obj->A()->B()->C()->D()->E();

?>