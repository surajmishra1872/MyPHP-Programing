<html>
<head>
<style>
#outer
{
height:700px;
width:100%;
background-image:url("building.jpg");
background-size:cover;
border:1px solid white;
box-sizing:border-box;
}
#inner
{
height:500px;
width:40%;
background:rgba(0, 0, 0,0.5);
margin:80px auto;
border-radius:15px;
box-sizing:border-box;
padding:40px;
color:white;
text-align:center;
box-shadow:0px 0px 5px black;
font-family:arial;
}
.txt{
width:90%;
height:40px;
margin:15px auto;
background:white;
border-radius:10px;
}
p{
float:left;
margin-left:22px;
}
.btn{
width:90%;
height:40px;
margin:15px auto;
background:#fb5a2e;
border-radius:10px;
color:white;
font-size:20px;
text-align:center;
}
</style>
</head>
<body>
<div id="outer">
<div id="inner">
<h1>Login Here</h1><br/>
<form action="requestbase.php" method="get">
<input type="email" placeholder="Your Email Address" class="txt" name="email"/><br/>
<input type="password" placeholder="Your Password"class="txt" name="password"/><br/>
<p><input type="checkbox" class="ch"  name="useragree" value="Agree"/>Agree with <u>Term & Condition</u></p>
<input type="submit" value="login" class="btn" name="ok"/>
</form>
</div>
</div>
</body>
</html>