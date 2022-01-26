<?php

$student=[
"Student1"=>["Regno."=>1,"name"=>"Suraj","Location"=>"Allahabad","Post"=>"Manager","Salary"=>56000],
"Student2"=>["Regno."=>2,"name"=>"Manish","Location"=>"Deoria","Post"=>"Driver","Salary"=>36000],
"Student3"=>["Regno."=>3,"name"=>"Ansh","Location"=>"Allahabad","Post"=>"Salesman","Salary"=>76000],
"Student4"=>["Regno."=>4,"name"=>"Kedar","Location"=>"Allahabad","Post"=>"Daroga","Salary"=>86000],
"Student5"=>["Regno."=>5,"name"=>"Suraj Y","Location"=>"Jaunpur","Post"=>"Software Enginner","Salary"=>150000],
];

echo "<table border='2px' cellpadding='5px'>";
echo "<tr><th>Student</th><th>RegistNo</th><th>Name</th><th>Location</th><th>Post</th><th>Salary</th></tr>";

foreach($student as $key=>$value)
{
echo "<tr>
<td>$key</td>";
foreach($value as $value1)
{
echo "<td>$value1</td>";
}
echo "</tr>";
}

echo "</table>";

echo PHP_EOL;
echo PHP_EOL;

print_r($student["Student1"]["name"]);


?>