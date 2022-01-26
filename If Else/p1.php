<?php

//wap in php to find reverse number

$no=readline("Enter Your Number: ");
$count=readline("Enter Your Count Number: ");
$sum=0;
while(true)
{

$q=$no/10;
$rem=$no%10;
$ef=$rem*(pow(10,$count-1));
$sum=$sum+$ef;
$no=$q;
$count--;
if($no==0)
{
break;
}

}

echo $sum;

?>