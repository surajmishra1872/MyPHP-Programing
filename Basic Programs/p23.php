<?php

// wap to show anonymose function in php

$demo=function($a)
{
	printf("Number is:%d\n",$a);
};
$demo(5);



$greet = function($name)
{
    printf("Hello %s\n", $name);
};

$greet('World');
$greet('PHP');


?>