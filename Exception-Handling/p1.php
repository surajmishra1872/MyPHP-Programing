<?php
//wap in php to show Exception Handling

$x=readline('Enter the value of x :');
$y=readline('Enter the value of y :');
$result=0;
try
{
	echo "Block of try Started.......\n";
	
	$result=$x/$y;
	
	echo "Block of try Ended..........\n";
}
catch(Exception $e)
{
	echo "Some Exception Raised".$e->getMessage();
	echo "\n";
}
finally
{
	echo "This block will be, executed.........\n";
	echo "The Result=$result \n";
}


?>