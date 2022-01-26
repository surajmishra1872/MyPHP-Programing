<?php

$vegitable=array(
1=>"Potato",
2=>"Zomato",
3=>"Lady Finger",
4=>"Jack Fruits",
5=>"Brinzal"
);

$fruits=array(
$vegitable,
"a"=>"Lemon",
"b"=>"Orange",
"c"=>"Banana",
"d"=>"Apple",
"e"=>"Grapes"
);

array_walk($fruits,"myfunction1","is akey of");
array_walk($fruits,"myfunction2");
array_walk_recursive($fruits,"myfunction3","is a key of");

function myfunction1($value,$key,$params)
{

echo "$key $params $value \n";

}

function myfunction2($value,$key)
{

echo "$key:$value \n";

}

function myfunction3($value,$key,$param)
{
echo "$key $param $value \n";
}

?>