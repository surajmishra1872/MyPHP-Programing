<?php

$student_id=$_POST["fid"];
$fname=$_POST["first_name"];
$lname=$_POST["last_name"];
$conn=mysqli_connect("localhost","root","123","app2021") or  die("Connection failed");
$sql="update students set first_name='{$fname}',last_name='{$lname}'  where id={$student_id};";
if($result=mysqli_query($conn,$sql) or die("SQL Query Failed"))
{
    echo 1;
}
else
{
    echo 0;
}

?>