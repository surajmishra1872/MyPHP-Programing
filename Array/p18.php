<?php

$name=["a"=>"Banana","b"=>"Apple","c"=>"Orange"];
$students=["Suraj","Kishan","Anand","Rekha"];

print_r(array_keys($name));

print_r(array_keys($students));

echo PHP_EOL;

print_r(array_key_first($name));

echo PHP_EOL;
print_r(array_key_last($name));

echo PHP_EOL;
print_r(array_key_exists("d",$name));

echo PHP_EOL;
print_r(key_exists("c",$name));

?>