<?php

$a="Hello From India Capital Delhi";

echo(str_replace("Capital","Rajdhani",$a));
echo PHP_EOL;

$find=["Hello","Capital","Delhi"];
$replace=["Good Day","Econmy City","Mumbai"];
echo(str_replace($find,$replace,$a));

echo PHP_EOL;

$find=["hello","capital","delhi"];
$replace=["Good Day","Econmy City","Mumbai"];
echo(str_ireplace($find,$replace,$a));

echo PHP_EOL;
echo("This is non case senstive function\n".str_ireplace("hello","hi",$a));

echo PHP_EOL;

echo("This is substr_replace functions:\n");

$str="Hello Worlds .The worlds is nice.";
echo substr_replace($str,"Earth",6); 
echo("\nThis is strtr functions:\n");
echo strtr($str,"eo","ia");
echo PHP_EOL;

$array=["Hello"=>"Hi","world"=>"Earth"];
echo strtr($str,$array);


?>