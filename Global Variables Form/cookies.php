<!DOCTYPE html>
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
    <?php
    
    setcookie("host_name","host name is suraj",time()+300,"/");
    
    
    ?>
    <div id="outer">
        <form>  

            <input type="text" name="name" class="a" placeholder="enter your name"/><br>
            <input type="email" name="email" class="a" placeholder="enter your email"/><br>
            <input type="number" name="number" class="a" placeholder="enter your number"/><br>
            <input type="submit"  name="submit" class="b">

        </form>
    </div>
<?php

echo "<h1>";

echo($_COOKIE["host_name"]);

echo "</h1>";

?>
</body>

</html>

