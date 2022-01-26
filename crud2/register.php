<?php include 'header.php'?>

<div id="formdiv">
  <center> <u> <h2 style="color:green;">Registration Page</h2></u></center>
    <form action="savedata.php" method="post">
        Name<br />
        <input type="text" name="name" /><br />
        Email<br />
        <input type="email" name="email"  /><br />
        Mobile<br />
        <input type="number" name="mobile"  /><br />
        Address<br />
        <textarea cols="50" rows="5" name="address" ></textarea><br>
       <div id="radiobutton">
        Gender<br />
        MALE<input type="radio" name="gender" value="MALE" />
        FEMALE<input type="radio" name="gender" value="FEMALE"  /><br></div>
        Message<br />
        <textarea cols="50" rows="5" name="message"></textarea><br>
        PASSWORD<br />
        <input type="text" name="password"  /><br />
        <input type="Submit" value="Register" name="submit">
    </form>

</div>
