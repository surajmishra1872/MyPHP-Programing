<?php

echo"<pre>";
$files_arr=$_FILES['attachment'];
$name=$files_arr['name'];
$type = $files_arr['type'];
$error = $files_arr['error'];
$tmp_path = $files_arr['tmp_name'];
$size = $files_arr['size'];

$file_info=pathinfo($name);
$extension=$file_info['extension'];
$file_name=$file_info['filename'];

$new_file_name=$file_name."_".time().".".$extension;
$conn=mysqli_connect("localhost","root","123","app2021");
$sql="insert into gallery(image)values('{$new_file_name}');";
if(mysqli_query($conn,$sql))
{
    if(move_uploaded_file($tmp_path,"upload/".$new_file_name))
    {
        header("Location:gallery.php");
    } 
}
else
    {
        echo"<h1>File Not Uploaded</h1>";
    }
?>