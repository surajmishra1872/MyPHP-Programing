<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        img{
            width: 100px;
            height: 100px;
        }
        table,th,tr,td{
            border: 2px solid green;
            border-collapse: collapse;
            font-size: 20px;
        }
        td
        {
            padding-left: 300px;
        }
    </style>
</head>
<body>
<u><center><h1>This is Gallery Page</h1></center></u>
    <?php $conn=mysqli_connect("localhost","root","123","app2021");
    $sql="select * from gallery";
    $res=mysqli_query($conn,$sql);
    if(mysqli_num_rows($res)>0)
    {
    ?>
    <table style="width:100%;">
        <tr>
            <th>Image Name</th>
            <th>Image </th>
        </tr>
        <?php while($row=mysqli_fetch_array($res)){ ?>
        <tr>
            
            <td><?php echo $row['image']?></td>
            <td><img src="upload/<?php echo $row['image']?>"></td>
        </tr>
        <?php } ?>
    </table>
    <?php }
    else
    {
        echo"<h1>No Image Found</h1>";
    }
    ?><br/><br/>
    <a href="index.php"><button style="background-color: green;color:white;font-size:25px;" >Go Back</button></a>
</body>
</html>