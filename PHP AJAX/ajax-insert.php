<?php

$fname=$_POST['first_name'];
$lname=$_POST['last_name'];
$conn=mysqli_connect("localhost","root","123","app2021") or  die("Connection failed");
$sql="insert into students(first_name,last_name) values('{$fname}','{$lname}');";
if(mysqli_query($conn,$sql))
{
echo 1;
}
else
{
    echo 0;
}
?>