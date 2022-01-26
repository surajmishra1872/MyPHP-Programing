<?php

$date=date_create("2013-03-15  22:50:14",timezone_open("Asia/Kolkata"));
//$date=date_create("2013-03-15  22:50:14");

echo date_format($date,"d/m/Y H:i:s");

echo PHP_EOL;

echo(checkdate(12,24,2021));

$a1=date_create("2013-05-25");
$a2=date_create("2013-05-15");

print_r(date_diff($a1,$a2));

echo PHP_EOL;

echo"data parsefunction is here";
print_r(date_parse("2015-03-15  12:30:25.5"));


echo PHP_EOL;


print_r(date_parse_from_format("d.n-y","15.3-2015"));


echo"***************************************************************************************************************************************************";

print_r(getdate());
echo"***************************************************************************************************************************************************";

print_r(gettimeofday());

echo"***************************************************************************************************************************************************";

print_r(localtime(time(),true));


echo"********************************************************** date_add(object,interval) **************************************************************************";

$dateobj=date_create("10-10-2010");
print_r(date_add($dateobj,date_interval_create_from_date_string("10 month")));


echo"********************************************************** date_sub(object,interval)***********************************************************************";

print_r(date_sub($dateobj,date_interval_create_from_date_string("10 days")));


echo"*****************************************************date_modify(object,modify)*******************************************************************";

print_r(date_modify($dateobj,"+10 days"));

?>