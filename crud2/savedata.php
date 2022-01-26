<?php

$stu_name=$_POST['name'];
$stu_email=$_POST['email'];
$stu_mobile=$_POST['mobile'];
$stu_address=$_POST['address'];
$stu_gender=$_POST['gender'];
$stu_message=$_POST['message'];
$stu_password=$_POST['password'];

include 'configur.php';
$sql ="INSERT INTO `student`(`name`, `email`, `mobile`, `address`, `gender`, `message`, `password`) VALUES ('{$stu_name}','{$stu_email}','{$stu_mobile}','{$stu_address}','{$stu_gender}','{$stu_message}','{$stu_password}')";
$result =mysqli_query($conn,$sql) or die("Query Unsuccessful.");
header("Location:http://localhost:50/index.php");
mysqli_close($conn);

?>