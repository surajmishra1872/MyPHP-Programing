<?php

$str="Hello India";
echo str_pad($str,20,".");
echo PHP_EOL;
echo str_pad($str,20,"+");
echo PHP_EOL;
echo str_pad($str,20,"+",STR_PAD_LEFT);
echo PHP_EOL;
echo str_pad($str,20,"+",STR_PAD_BOTH);
echo PHP_EOL;
echo str_pad($str,20,"+",STR_PAD_RIGHT);// DIRECTION IS DEFAULT
echo PHP_EOL;


echo(str_repeat("India \t",10))
?>