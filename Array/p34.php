<?php

print_r(range(1,10));
print_r(range(1,10,2));
print_r(range(1,10,3));
print_r(range("A","L"));
print_r(range("H","A"));

foreach(range('h','a') as $letters)
{
echo $letters."\n";
}
?>