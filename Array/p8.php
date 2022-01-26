<?php

$fruits=["Apple","Banana","Grapes","Pine Apple","Orange","Chiku","Papaya","Pine Apple","Orange","Chiku","Papaya"];


echo ("Size of Fruits Array Using count Function is:".count($fruits))."\n";
echo ("Size of Fruits Array Using sizeof Function is:".sizeof($fruits))."\n";

$student=[
"Student1"=>["Regno."=>1,"name"=>"Suraj","Location"=>"Allahabad","Post"=>"Manager","Salary"=>56000],
"Student2"=>["Regno."=>2,"name"=>"Manish","Location"=>"Deoria","Post"=>"Driver","Salary"=>36000]
];

echo ("Size of Student Array Using count Function is:".count($student))."\n";
echo ("Size of Student Array Using sizeof Function is:".sizeof($student))."\n";

echo ("Size of Student Array Using count Function with mod value is:".count($student,0))."\n";
echo ("Size of Student Array Using count Function with mod value is:".count($student,1))."\n";
echo ("Size of Student Array Using sizeof Function with mod value  is:".sizeof($student,1))."\n";

print_r(array_count_values($fruits));






?>