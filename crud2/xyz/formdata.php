<?php

$name=$_POST['name'];
echo $name;
$conn=mysqli_connect("localhost","root","123","crud2") or die("Connection Failed");
$sql="INSERT INTO `xyz`(`name`) VALUES ('{$name}')";
mysqli_query($conn,$sql) or die("Query Unsuccessfull");
mysqli_close($conn);



?>