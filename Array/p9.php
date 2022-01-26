<?php

$fruits=["Apple","Banana","Grapes","Pine Apple","Orange","Chiku","Papaya","Pine Apple","Orange","Chiku","Papaya",10,20,"30",40];

$student=[
"Student1"=>["Regno."=>1,"name"=>"Suraj","Location"=>"Allahabad","Post"=>"Manager","Salary"=>56000],
"Student2"=>["Regno."=>2,"name"=>"Manish","Location"=>"Deoria","Post"=>"Driver","Salary"=>36000]
];

echo(in_array("Banana",$fruits));
echo PHP_EOL;
echo(in_array("Banan",$fruits));
echo PHP_EOL;
echo(in_array(40,$fruits));
echo PHP_EOL;
echo(in_array(30,$fruits,1));
echo PHP_EOL;

echo("this is array_search:".array_search("30",$fruits,1));//return 13
echo PHP_EOL;
echo("this is array_search:".array_search(30,$fruits)); // return 0
echo PHP_EOL;
echo(array_search("Banana",$fruits));
echo PHP_EOL;
print_r(array_search(["Regno."=>1,"name"=>"Suraj","Location"=>"Allahabad","Post"=>"Manager","Salary"=>56000],$student));

echo PHP_EOL;

?>