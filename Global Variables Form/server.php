
<html lang="en">
<head>
    <style>
#outer{
    width: 400px;
    height: 500px;
    background-color:darkblue;
    color: white;
    margin: 100px auto;
    padding-left: 45px;
    border-radius: 5px;
    box-sizing: border-box;
}
.a{
    width: 300px;
   
    margin-top: 40px;
    height: 40px;
    font-size: 20px;
}
.b{
    background-color: green;
    color: white;
    font-size:25px;
    height: 40px;
    width: 100px;
    margin-top: 20px;
    margin-left: 100px;
}
    </style>
</head>
<body>
    <div id="outer">
       <!-- <form action="serverbase.php" method="post"> --> 
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post"> 

            <input type="text" name="name" class="a" placeholder="enter your name"/><br>
            <input type="email" name="email" class="a" placeholder="enter your email"/><br>
            <input type="number" name="number" class="a" placeholder="enter your number"/><br>
            <input type="submit"  name="submit" class="b">

        </form>

           <?php
if(isset($_POST['submit']))
{
    echo($_POST['name'])."<br/>";
    echo($_POST['email'])."<br/>";
    echo($_POST['number'])."<br/>";
}

?>


    </div>
 
</body>

</html>

