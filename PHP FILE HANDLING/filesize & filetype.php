<?php

$file="dummy.txt";

echo filesize($file);
echo PHP_EOL; 
echo filetype($file);
echo PHP_EOL; 
echo realpath($file);
echo PHP_EOL;
print_r(pathinfo($file));

?>