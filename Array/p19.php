<?php
function compare($a,$b)
{
if($a===$b)
{
return 0;
}
return($a>$b)?1:-1;
}

function cmpkey($a,$b)
{
if($a===$b)
{
return 0;
}
return($a>$b)?1:-1;
}

$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$a2=array("a"=>"red","f"=>"green","d"=>"purple");

/*
print_r(array_intersect($a1,$a2));
print_r(array_intersect_key ($a1,$a2));


print_r(array_intersect_assoc($a1,$a2));

print_r(array_intersect_uassoc($a1,$a2,"compare"));

print_r(array_uintersect_assoc($a1,$a2,"compare"));


print_r(array_intersect_ukey($a1,$a2,"compare"));

print_r(array_uintersect_uassoc($a1,$a2,"compare","cmpkey"));

*/

print_r(array_uintersect($a1,$a2,"compare"));
?>