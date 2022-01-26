<?php

$str="Who's Your Father. A little boy says,'Mr. XYZ is my father who's a police officer in U.P. ' ";

//echo(addslashes($str));

echo PHP_EOL;
//echo(addcslashes($str,'A...Z'));

echo PHP_EOL;
//echo(addcslashes($str,'a...z'));

echo PHP_EOL;
//echo(addcslashes($str,'a'));

$x=addcslashes($str,'A...Z');
echo $x;
echo PHP_EOL;
echo PHP_EOL;
echo stripslashes($x);

?>