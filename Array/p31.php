<?php

$fruits=["Apple","grapes","Banana","Mango","Orange","Coconut"];
echo "Current :  ".current($fruits)."\n";

echo "Key :  ".key($fruits)."\n";

next($fruits);
echo "Current :  ".current($fruits)."\n";
next($fruits);
echo "Position :  ".current($fruits)."\n";
prev($fruits);
echo "Current :  ".current($fruits)."\n";
end($fruits);
echo "Current :  ".current($fruits)."\n";

reset($fruits);
echo "Current :  ".current($fruits)."\n";

print_r(each($fruits));
?>