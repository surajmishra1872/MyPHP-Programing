<?php

class school
{
	public function getnames(student $n)
	{
		foreach($n->names() as $values)
		{
			echo $values."\n";
		}
	}
}
class student
{
	public function names()
	{
		return ['Suraj','Ram','Luxman'];
	}
}

$obj1=new student();
$obj2=new school();
$obj2->getnames($obj1);


?>