<?php

$a=readline("Enter Your Number:");
$k=1;
for($i=$a;$i>=1;$i--)
{
for($j=$a;$j>$k;$j--)
{
echo "  "." ";
}
$k++  ;
echo "*";
echo PHP_EOL;
}
?>