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
$sql ="UPDATE `student` SET `name`='{$stu_name}',`email`='{$stu_email}',`mobile`='{$stu_mobile}',`address`='{$stu_address}',`gender`='{$stu_gender}',`message`='{$stu_message}',`password`='{$stu_password}' WHERE id={$stu_id}";
$result =mysqli_query($conn,$sql) or die("Query Unsuccessful.");
header("Location:http://localhost:50/index.php");
mysqli_close($conn);

?>