<?php

include_once __DIR__."/init.php";

try
{
	mysqli_report(MYSQLI_REPORT_ERROR|MYSQLI_REPORT_STRICT);
if($conn=mysqli_connect(
$settingdata["db:config"]["hostname"],
$settingdata["db:config"]["user"],
$settingdata["db:config"]["password"],
$settingdata["db:config"]["database"]
))
{	
print_r($conn);
}
else
{
	throw new exception();
}

}
catch(exception $e)
{
	$e->getMessage();
	echo "Connection nhi ho paya hai.....".mysqli_connect_error();
}



?>