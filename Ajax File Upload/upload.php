<?php

$filename=$_FILES['image']['name'];
$name=$_POST['name'];
$conn=mysqli_connect("localhost","root","123","app2021");

if($filename!='' && $name!='')
{
    $sql="insert into manish (name,image) values('{$name}','{$filename}');";
    mysqli_query($conn,$sql);
    if(move_uploaded_file($_FILES['image']['tmp_name'],"upload/".$filename)){ 
       echo 1;
    }
}
else
{
    echo 0;
}

?>