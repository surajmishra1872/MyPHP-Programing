<?php

$arr1=["Suraj","Mishra","Kumar","Singh"];
echo PHP_EOL;
print_r($arr1[array_rand($arr1)]);
echo PHP_EOL;	
$ren=array_rand($arr1,2);
print_r($arr1[$ren[0]]);
echo PHP_EOL;
print_r($arr1[$ren[1]]);

?>    