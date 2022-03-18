<?php

$file="dummy.txt";
$path=realpath($file);
echo filesize($file);
echo PHP_EOL; 
echo filetype($file);
echo PHP_EOL; 
echo realpath($file);
echo PHP_EOL;
print_r(pathinfo($file));
echo PHP_EOL;
print_r(pathinfo($path,PATHINFO_FILENAME));
echo PHP_EOL;
echo basename($path,".txt");
echo PHP_EOL;
echo dirname($path,2);
?>