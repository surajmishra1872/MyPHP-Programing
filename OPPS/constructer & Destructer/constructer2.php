<?php

//wap in php to show program to show no-return type in parameterised constructer..

class test
{
	public function __construct($a)
	{
		echo 'Constructer is called automatically.....';
		echo PHP_EOL;
		return 10+$a;
		
	}
	
}

#Object Creation
$test=new Test(200);
//$test=new Test;
//echo $test; //Implicitly Called and be returned.
$x=$test->__construct(200); //Explicitly Called as method can be returned
echo $x;

?>