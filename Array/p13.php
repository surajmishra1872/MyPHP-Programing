<?php

$name=Array(["Banana","Apple","Orange"],
["Grapes","Pine Apple","Chiku"]
);
//print_r(array_shift($name[0]));
//print_r($name);

array_unshift($name[1][1],"Papaya","Watermelon");
print_r($name);

?>