<?php

define("hostname","localhost:3306");
define("user","root");
define("password","123");
define("dbname","app2021");

try
{
mysqli_report(MYSQLI_REPORT_ERROR|MYSQLI_REPORT_STRICT);
if($conn=mysqli_connect(hostname,user,password,dbname))
{
	//print_r($conn);
}	
else
{
	throw new exception("Db not Connected");
}
}
catch(exception $e)
{
	echo"Here is Resone for Error".$e->getMessage();
	exit("Some error ocuured".mysqli_connect_error());
}

?>