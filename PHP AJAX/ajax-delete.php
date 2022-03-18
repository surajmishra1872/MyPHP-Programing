<?php   

$student_id=$_POST["id"];
$conn=mysqli_connect("localhost","root","123","app2021") or  die("Connection failed");
$sql="delete from students where id={$student_id};";
if(mysqli_query($conn,$sql) or die("SQL Query Failed"))
{
    echo 1;
}
else
{
    echo 0;
}

?>