<?php

echo(date("l H-i-s a" ,mktime(0,0,0,12,25,2021)));

echo PHP_EOL;

echo date("d-m-Y H-i-s a",gmmktime(0,0,0,12,25,2021));


?>