<?php

$data=array(

array(1,"Suraj","CEO","Allahabad",50000),
array(2,"Kishan","Manager","Karchhana",45000),
array(3,"Ansh","Salesman","Mau",30000),
array(4,"Ashu","Shopkeeper","Balia",20000),
array(5,"Manish","Driver","Deoria",15000)
);
echo "<table border='2px' cellpadding='10px'>";
echo "<tr><th>Roll No.</th>
	<th>Name</th>
	<th>Postion</th>
	<th>Location</th>
	<th>Salary</th><tr>";
for($i=0;$i<=4;$i++)
{
echo "<tr>";
for($j=0;$j<=4;$j++)
{
echo "<td>".$data[$i][$j]."</td>";
};
echo "</tr>";
};
echo"</table>";


?>