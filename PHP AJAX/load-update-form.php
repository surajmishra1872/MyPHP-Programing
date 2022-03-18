<?php

$student_id=$_POST["eid"];
$conn=mysqli_connect("localhost","root","123","app2021") or  die("Connection failed");
$sql="select * from students where id={$student_id};";
if($result=mysqli_query($conn,$sql) or die("SQL Query Failed"))
{
    print_r(json_encode(mysqli_fetch_array($result,MYSQLI_ASSOC)));
}
else
{
    echo 0;
}

?>