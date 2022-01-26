<?php

$name1=["a"=>"Banana","b"=>"Apple","c"=>"Orange"];
$name2=["d"=>"Grapes","e"=>"Pine Apple","a"=>"Chiku"];

$res=array_replace_recursive($name1,$name2);

print_r($res);
print_r($name1+$name2);


?>