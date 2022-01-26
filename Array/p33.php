<?php

$a="Orange";
$color=array('a'=>'red','b'=>'green','c'=>'blue');
//extract($color,EXTR_OVERWRITE);
//extract($color,EXTR_SKIP);
//extract($color,EXTR_PREFIX_SAME,"pre");
extract($color,EXTR_PREFIX_ALL,"pre");

echo"Value of a is:".$a."\n";
echo"Value of a is:".$pre_a."\n";
echo"Value of b is:".$pre_b."\n";
echo"Value of c is:".$pre_c."\n";

$first_name="Suraj";
$last_name="Mishra";
$age="19";

$newArray=compact("first_name","last_name","age");

print_r($newArray);

?>