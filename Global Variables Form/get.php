<html>
<head>
<style>
.a
{
width:300px;
height:30px;
border: 2px solid green;
margin-top:10px;
}
</style>
</head>
<body>

<form  action="getbase.php" method="get">
First Name:<input type="text" name="fname" class="a" /><br/>
Last Name:<input type="text" name="lname" class="a" /><br/>
Gender:<br/>
Male<input type="radio" name="gender" value="Male"/>
Female<input type="radio" name="gender" value="Female"/><br/>
<input type="submit" name="submit"/>
</form>

</body>
</html>