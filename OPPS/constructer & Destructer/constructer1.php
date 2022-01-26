<?php

//wap in php to show program to show no-return type in non-parameterised constructer..

class test
{
	public function __construct()
	{
		echo 'Constructer is called automatically.....';
		echo PHP_EOL;
		return 10;
		
	}
	
}

#Object Creation
$test=new Test();
$test=new Test;
echo $test; //Implicitly Called and be returned.
$x=$test->__construct(); //Explicitly Called as method can be returned
echo $x;


?>