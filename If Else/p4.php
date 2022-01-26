<?php

//wap in php to find reverse number

$no=readline("Enter Your Number: ");
$count=strlen($no);
$sum=0;
while( $no!=0)
{
$q=$no/10;
$rem=$no%10;
$ef=$rem*(pow(10,$count-1));
$sum=$sum+$ef;
$no=$q;
$count--;
}

echo $sum;

?>

