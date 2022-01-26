<?php include 'header.php'?>

<div id="formdiv">
  <center> <u> <h2>Update Records</h2></u></center>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
        User Id<br />
        <input type="text" name="name" placeholder="Enter Your ID...." /><br />
        <input type="Submit" value="Show" name="showbtn">
    </form>
</div>

<?php

if(isset($_POST['showbtn']))
{

    include 'configur.php';
    $sid=$_POST['name'];
    $sql="select * from student where id={$sid}";
    $result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0)
    {
        while($row=mysqli_fetch_assoc($result))
        {

?>

<div id="formdiv">
  
    <form action="updatedata.php" method="post">
        
        <input type="hidden" name="id" value="<?php echo $row['id'];?>"  name="id"/><br />
        Name<br />
        <input type="text" name="name" value="<?php echo $row['name']; ?>"  name="name"/><br />
        Email<br />
        <input type="email" name="email" value="<?php echo $row['email']; ?>" name="email" /><br />
        Mobile<br />
        <input type="number" name="mobile" value="<?php echo $row['mobile']; ?>" name="mobile" /><br />
        Address<br />
        <textarea cols="50" rows="5" name="address" ><?php echo $row['address']; ?></textarea><br>
       <div id="radiobutton">
        Gender<br />
        <?
        if($row['gender']=='MALE')
        {
            $check="checked";
        }
        else{
            $echeck="checked";
        }
        ?>
        MALE<input type="radio" name="gender" value="MALE" {$check} />
        FEMALE<input type="radio" name="gender" value="FEMALE" {$echeck} /><br></div>
        Message<br />
        <textarea cols="50" rows="5" name="message"><?php echo $row['message']; ?></textarea><br>
        PASSWORD<br />
        <input type="text" name="password" value="<?php echo $row['password']; ?>" name="password"/><br />
        <input type="Submit" value="Update" name="submit">
    </form>
<?php

        }
    }
    else 
    {echo "<h1>Record Not Found......</h1>";}
}

?>
</div>
