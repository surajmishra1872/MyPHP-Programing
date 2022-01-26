<?php

echo(max(2,4));
echo PHP_EOL;
echo(max(2,4,0));
echo PHP_EOL;
echo(max(TRUE,FALSE));
echo PHP_EOL;
echo(max(TRUE,1));
echo PHP_EOL;
print_r(max(array(2,4,8),array(9,5,2)));

echo "Here Result of Min.";
echo PHP_EOL;
echo(min(2,4));
echo PHP_EOL;
echo(min(2,4,0));
echo PHP_EOL;
echo(min(TRUE,FALSE));
echo PHP_EOL;
echo(min(TRUE,1));
echo PHP_EOL;
print_r(min(array(2,4,8),array(9,5,2)));

?>