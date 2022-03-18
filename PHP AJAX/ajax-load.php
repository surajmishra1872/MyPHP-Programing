<?php

$conn=mysqli_connect("localhost","root","123","app2021") or  die("Connection failed");
$sql="select * from students";
$result=mysqli_query($conn,$sql) or die("SQL Query Failed");
$output="";
if(mysqli_num_rows($result)>0)
{
while($row=mysqli_fetch_assoc($result))
{
   $output.="<tr><td>{$row["id"]}</td>
   <td>{$row["first_name"]}</td>
   <td>{$row["last_name"]}</td><td><button class='edit-btn' data-eid='{$row["id"]}'>Edit</button></td><td><button class='delete-btn' data-id='{$row["id"]}'>Delete</button></td></tr>";
}
mysqli_close($conn);
echo $output;
}
else
{
echo "No Record Found";
}
?>