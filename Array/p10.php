 <?php

$salary1=array(12000,14000,16000,18000,20000);
$salary2=[24000,28000,32000,36000,40000];
$salary3=array(12000,14000,'a'=>16000,18000,1=>20000);
$salary4=[24000,28000,1=>32000,36000,'a'=>40000];

//print_r(array_replace($salary1,$salary2));
//print_r(array_replace($salary1,$salary2));

print_r(array_replace($salary3,$salary4));

?>