<?php

$str="Suraj Kumar Mishra Kumar";
echo(strlen($str));
echo PHP_EOL;

echo(str_word_count($str,0));
echo PHP_EOL;
print_r(str_word_count($str,1));
echo PHP_EOL;
print_r(str_word_count($str,2));
echo PHP_EOL;
print(substr_count($str,"Kumar"));
echo PHP_EOL;
print(substr_count($str,"Kumar",12));
echo PHP_EOL;
print(substr_count($str,"Kumar",1,5));
?>