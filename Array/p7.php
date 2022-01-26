<?php

$name=[
["suraj","kishan","ansh"],
["mishra","kumar","gupta"],
];
echo "<table border='2px' cellpadding='10px'><tr><th>Name 1</th><th>Name 2</th><th>Name 3</th></tr>";
forEach($name as list($name1,$name2,$name3))
{
echo("<tr>");
echo("<td>".$name1."</td>");
echo("<td>".$name2."</td>");
echo("<td>".$name3."</td>");
echo("</tr>");
};
echo "</table>";

?>