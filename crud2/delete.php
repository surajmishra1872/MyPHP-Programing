<?php include 'header.php'?>

<div id="formdiv">
  <center> <u> <h2 style="color:red;">Delete Records</h2></u></center>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
        User Id<br />
        <input type="text" name="id" placeholder="Enter Your ID...." /><br />
        <input type="Submit" value="Show" name="dsubmit">
    </form>
</div>

<?php
if(isset($_POST['dsubmit']))
{
include 'configur.php';
$sid=$_POST['id'];
$sql="Select * from student where id={$sid}";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0)
{
    while($row=mysqli_fetch_assoc($result))
    {
?>

<div id="formdiv">
  
    <form action="deletedata.php" method="post">
        ID<br />
        <input type="hidden" name="id" value="<?php echo $row['id']  ?>" /><br />
        Name<br />
        <input type="text" name="name" value="<?php echo $row['name']  ?>" /><br />
        Email<br />
        <input type="email" name="email" value="<?php echo $row['email']  ?>" /><br />
        Mobile<br />
        <input type="number" name="mobile" value="<?php echo $row['mobile']  ?>" /><br />
        Address<br />
        <textarea cols="50" rows="5">value="<?php echo $row['address']  ?>"</textarea><br>
       <div id="radiobutton">
        Gender<br />
        MALE<input type="radio" name="gender" value="MALE" />
        FEMALE<input type="radio" name="gender" value="FEMALE"  /><br></div>
        Message<br />
        <textarea cols="50" rows="5" ><?php echo $row['message']  ?></textarea><br>
        PASSWORD<br />
        <input type="text" name="password"  value="<?php echo $row['password']?>" /><br />
        <input type="Submit" value="Delete" name="submit">
    </form>
<?php 
}

} 

else "<h1>Record Not Found</h1>";
}
?>
</div>
