<?php

$str="  Sing A Samsung Song   ";
echo("Legth before trim is :".strlen($str));
echo PHP_EOL;
echo(trim($str));

echo PHP_EOL;
echo("Legth after trim is :".strlen(trim($str)));

$str1="Sing A Samsung SongS Song";
echo PHP_EOL;
echo(trim($str1,"S"));

echo PHP_EOL;
echo(ltrim($str1,"S"));

echo PHP_EOL;
echo(rtrim($str1,"S"));

echo PHP_EOL;
echo chop($str1,"Songs");

echo PHP_EOL;
echo chop($str1,"Sing");
?>