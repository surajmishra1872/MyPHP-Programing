<?php

echo "<pre>";
print_r($_POST);
echo "<pre>";

echo "<h1>";
echo"User's Full Name is : ".($_POST['fname'])."<br/>";

echo"User's Email is : ".($_POST['email'])."<br/>";

echo"User's Password is : ".($_POST['password'])."<br/>";

echo"User's Gender is : ".($_POST['gen'])."<br/>";

echo"User's User Name is : ".($_POST['uname'])."<br/>";

echo"User's PhoneNumber is : ".($_POST['phonenumber'])."<br/>";

echo"<h1/>";
?>