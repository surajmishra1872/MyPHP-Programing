<?php

include_once __DIR__."/p1.php";
$id=readline("Enter Your ID: ");

$sql="delete from emp where id={$id};";
if(mysqli_query($conn,$sql))
{
echo"record added success fully with ID : ".mysqli_affected_rows($conn);
}
else
{
echo"record not added".mysqli_error($conn);
}

?>