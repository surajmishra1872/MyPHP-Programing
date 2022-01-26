<?php

$city=["Allahabad","Lucknow","Meerut","Ghaziabad","Deoria"];
$citykey=['a'=>"Allahabad",'b'=>"Lucknow",'c'=>"Meerut",'d'=>"Ghaziabad",'e'=>"Deoria"];
$state=['a'=>"Utter Pradesh",'a'=>"Madhya Pradesh","Hariyana",'a'=>"Jharkhand","Rajsthan"];
$name=["suraj","Kumar","Mishra","Radhe","Bhaiya"];

//$res=array_merge($citykey,$state);
//print_r($res);

$res1=$res=array_merge_recursive($citykey,$state);
print_r($res1);

print_r(array_combine($city)); 

?>