<?php
$stu_id=$_POST['id'];
$stu_name=$_POST['name'];
$stu_email=$_POST['email'];
$stu_mobile=$_POST['mobile'];
$stu_address=$_POST['address'];
$stu_gender=$_POST['gender'];
$stu_message=$_POST['message'];
$stu_password=$_POST['password'];

include 'configur.php';
$sql ="delete from student where id={$stu_id}";
$result =mysqli_query($conn,$sql) or die("Query Unsuccessful.");
header("Location:http://localhost:50/index.php");
mysqli_close($conn);

?>