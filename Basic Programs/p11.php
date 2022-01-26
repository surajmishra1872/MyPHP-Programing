<?php

$a=readline("Enter Your Start Number:");
$b=readline("Enter Your Stop Number:");

for($i=$a;$i<=$b;$i+=10)
{
for($j=$i;$j<$i+10;$j++)
{
echo $j."   ";
}
echo PHP_EOL;
}

?>