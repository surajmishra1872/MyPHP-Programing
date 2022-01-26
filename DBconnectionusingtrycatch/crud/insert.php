<?php

include_once __DIR__."/p1.php";
$name=readline("Enter Your Name: ");
$email=readline("Enter Your Email: ");

$sql="insert into emp(name,email) value('{$name}','{$email}');";
if(mysqli_query($conn,$sql))
{
echo"record added success fully with ID : ".mysqli_insert_id($conn);
}
else
{
echo"record not added".mysqli_error($conn);
}

?>