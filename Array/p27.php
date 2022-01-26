<?php

$vegitable=array(
1=>"Potato",
2=>"Zomato",
3=>"Lady Finger",
4=>"Jack Fruits",
5=>"Brinzal"
);

$name=["Suraj","Kumar","Mishra","Rohit","Technofy India"];

$fruits=array(
//$vegitable,
"a"=>"Lemon",
"b"=>"Orange",
"c"=>"Banana",
"d"=>"Apple",
"e"=>"Grapes"
);

array_walk($fruits,"myfunction1");
array_walk($fruits,"myfunction2","is a key of");
array_walk_recursive($fruits,"myfunction3","is a key of");
array_walk($name,"myfunction4");

function myfunction1($value,$key)
{
echo "$key=>$value\n";
}

function myfunction2($value,$key,$param)
{
echo "$key $param $value\n";
}

function myfunction3($value,$key,$param)
{
echo "$key $param $value\n";
}

function myfunction4($value,$key)
{
echo "$key=$value\n";
}

?>