<?php

$city=["Allahabad","Lucknow","Meerut","Ghaziabad","Deoria"];

$res1=array_slice($city,1,3);
$res2=array_slice($city,1,3,True);
print_r($res1);
PHP_EOL;
print_r($res2);

?>