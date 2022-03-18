<?php

$conn=mysqli_connect("localhost","root","123","app2021");
$sql="select * from manish";
$result=mysqli_query($conn,$sql) or die("SQL Query Failed");
$output="<table style='width:100%;' border='2' rules='all'><tr><th>Image</th><th>Name</th></tr>";

if(mysqli_num_rows($result)>0)
{
        while($row=mysqli_fetch_array($result))
        {
        $output.='<tr><td><img src="'."upload/".$row["image"].'"/></td><td>'.$row['name']."</td></tr>";
        }
        $output.="</table>";
        mysqli_close($conn);
        echo $output;
}
else
{
    echo"Data Not Found....";
}

?>