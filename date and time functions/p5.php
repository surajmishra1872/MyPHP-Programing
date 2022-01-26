<?php

echo date_default_timezone_get();
echo PHP_EOL;
date_default_timezone_set("Asia/Kolkata");
echo PHP_EOL;
echo date_default_timezone_get();
echo PHP_EOL;
echo "*****************************************";
echo PHP_EOL;
$a=timezone_open("Asia/Kolkata");
echo timezone_name_get($a);
echo PHP_EOL;
echo date_default_timezone_get();
echo PHP_EOL;
echo "**************************************";
print_r(timezone_location_get($a));
echo PHP_EOL;
echo "**************************************";
print_r(timezone_identifiers_list(256));
print_r(timezone_identifiers_list(16));

?>