<?php

//working with strings

echo "Working With String";

echo PHP_EOL;

echo "String is:'suraj mishra' ";

echo PHP_EOL;
echo "Length of string is:".strlen("suraj mishra");

echo PHP_EOL;
echo "Reverse  of string is:".strrev("suraj mishra");

echo PHP_EOL;
echo "Numbwer  of word in string is:".str_word_count("suraj mishra");

echo PHP_EOL;
echo "Position of 'mishra' in  given string is:".strpos("suraj mishra","mishra");

echo PHP_EOL;
echo "Replacement of 'mishra'  to 'MishraG' in  given string is:".str_replace("mishra","MishraG","suraj mishra");

echo PHP_EOL;
echo "using 'addcslashes in string':".addcslashes("suraj mishra",'m');

echo PHP_EOL;
echo "using 'addcslashes' in \\n escape sequence' in string':".addcslashes("suraj mi\nshra",'m');

echo PHP_EOL;
echo "using 'addcslashes' with range in string':".addcslashes("Suraj Kumar Mishra",'A...Z');

echo PHP_EOL;
echo "using 'addcslashes' with range in string':".addcslashes("Suraj Kumar Mishra",'a...z');

echo PHP_EOL;
echo "using 'addslashes' with string:".addslashes("suraj \n mishr'a' ");

echo PHP_EOL;
echo "using 'addslashes' with string:".addslashes("suraj \n mishr'a' kumar 'allahabad' ");




?>