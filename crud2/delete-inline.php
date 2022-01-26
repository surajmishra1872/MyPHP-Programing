<?php

$did=$_GET['id'];

include 'configur.php';

$sql="DELETE FROM student WHERE id={$did}";

mysqli_query($conn,$sql) or die("Unsuccessfull query...");

header("Location:http://localhost:50/index.php");
mysqli_close($conn);

?>