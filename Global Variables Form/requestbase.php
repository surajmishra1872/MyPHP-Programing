<?php

echo "<pre>";
print_r($_REQUEST);
echo "</pre>";

echo "<h1>";
echo"User's Email is : ".($_REQUEST['email'])."<br/>";
echo"User's Password is : ".($_REQUEST['password'])."<br/>";
echo"User's Agreement is : ".($_REQUEST['useragree'])."<br/>";
echo"<h1/>";
?>