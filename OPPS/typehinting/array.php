<?php

function demo(array $name)
{
	foreach($name as $value)
	{
		echo $value."\n";
	}
	
}

$arr=["suraj","ram","shyam"];
demo($arr);


?>