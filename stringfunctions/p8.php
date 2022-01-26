<?php
/*
echo (strcmp("Hello World","Hello"));
echo PHP_EOL;

echo (strncmp("Hello World","Hello",3));
echo PHP_EOL;

echo (strcasecmp("Hello World","hello"));
echo PHP_EOL;

echo (strncasecmp("Hello World","HELLO",3));
echo PHP_EOL;

echo (strnatcmp("Hello World","HELLO"));
echo PHP_EOL;

echo(strnatcmp("Suraj","Suraj Mishra")); 
echo PHP_EOL;

echo(strnatcmp("20Suraj","10Suraj Mishra")); 
echo PHP_EOL;
*/
echo(strnatcasecmp("suraj","Suraj")); 
echo PHP_EOL;

echo substr_compare("Hello Worlds","Worlds",6);//0
echo PHP_EOL;

echo substr_compare("Hello Worlds","Worlds",0);//-1
echo PHP_EOL;

echo substr_compare("Hello Worlds","Worlds",6,9);
echo PHP_EOL;

echo substr_compare("hello worlD!","d!",-2,2,TRUE);
echo PHP_EOL;
?> 