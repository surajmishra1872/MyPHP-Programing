<?php

//function with return

function demo($a,$b,$c,$d,$e)
{
      return ($a+$b+$c+$d+$e);
}
function demo1($a,$g=10)
{
return $a-$g;
}
$c=demo(1,2,3,4,10);
echo ("result is:".(demo1($c)));
?>