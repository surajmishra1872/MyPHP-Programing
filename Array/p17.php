<?php

$array1=["Suraj","Mishra"," Kishan","Anand"];
$array2=["Rohit","Deepak","Tej"];

//array_splice($array1,1);
//print_r($array1);

//array_splice($array1,1,2); // this is used for delete
//print_r($array1);

//array_splice($array1,1,2,$array2);// this is used to replace values
//print_r($array1);

//array_splice($array1,1,0,$array2);// this is used to add values
//print_r($array1);

array_splice($array1,1,-2,$array2);// this is used to add values
print_r($array1);

?>