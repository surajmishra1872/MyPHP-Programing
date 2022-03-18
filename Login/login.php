<?php

$email=$_POST['email'];
$password=$_POST['password'];

if($email=="suraj@gmail.com" && $password==123)
{
    header("Location:Admin.php");
}
else
{
 echo"<h3>You Are Not Logged In</h3>";   
}

?>