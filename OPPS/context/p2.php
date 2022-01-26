<?php

//wap in php to show static keyword

 function increments()
 {
	 
	 static $i=0;
	 echo"before increment value is:";
	 echo $i;
	 $i++;
	 echo PHP_EOL;
	 echo"After increment value is:";
	 echo $i;
	 echo PHP_EOL; 
 } 

increments();
increments();
increments();
increments();
increments();

?>