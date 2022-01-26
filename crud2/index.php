
<?php include 'header.php'?>

<?php

include 'configur.php';
$sql="select * from student";
$res=mysqli_query($conn,$sql);
if(mysqli_num_rows($res)>0)
{
?>
        <table width="100%" style="margin-top: 20px;">
            <caption><h1><u>Students Records</u></h1></caption>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Mobile</th>
                <th>Address</th>
                <th>Gender</th>
                <th>Message</th>
                <th>Action</th>
            </tr>
            <?php
             while($row=mysqli_fetch_assoc($res))
             {
             ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['mobile']; ?></td>
                <td><?php echo $row['address']; ?></td>
                <td><?php echo $row['gender']; ?></td>
                <td><?php echo $row['message']; ?></td>
                <td ><a href="update.php?id=<?php echo $row['id']; ?>" class="btn">EDIT</a><a href="delete-inline.php?id=<?php echo $row['id']; ?>" class="btn">DELETE</a></td>
            </tr>
            <?php } ?>
        </table>
<?php
}
else
{
    echo "<h1>No Record Found</h1>";
}
mysqli_close($conn);
?>
    </div>

</body>

</html>