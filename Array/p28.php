<?php

$vegitable=array(
1=>"Potato",
2=>"Zomato",
3=>"Lady Finger",
4=>"Jack Fruits",
5=>"Brinzal"
);

$number=[1,2,3,4,5];

//$res=array_map("myfunction",$number);
//$res=array_map("myfunction",$number,$vegitable);
//$res=array_map(null,$number,$vegitable);
$res=array_map("func",$vegitable);
function myfunction($value,$veg)
{
//echo $value;
return "$value=>$veg";
}

function func($value)
{
//echo $value;
return strtoupper($value);
}

print_r($res);

?>