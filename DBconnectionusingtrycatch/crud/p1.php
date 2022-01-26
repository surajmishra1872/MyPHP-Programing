<?php

define("hostname","localhost:3306");
define("username","root");
define("password","123");
define("databasename","app2021");

try
{
	mysqli_report(MYSQLI_REPORT_ERROR|MYSQLI_REPORT_STRICT);
	
	if($conn=mysqli_connect(hostname,username,password,databasename))
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
	echo $e->getMessage();
	echo"Can not connect database till now Please check you code......".mysqli_connect_error();
}


?>