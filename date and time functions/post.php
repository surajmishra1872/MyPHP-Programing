<html>
<head>
<style>
*{
font-family:arial;
}
#outer{
height:700px;
background:linear-gradient(60deg,#7ed6df,#8e44ad);
box-sizing:border-box;
border:1px solid white;
font-family:arial;
}
#inner
{
width:50%;
margin:50px auto;
background:white;
height:600px;
border-radius:10px;
box-shadow:0px 0px 10px black;
box-sizing:border-box;
}
#up{
height:75px;
border-radius:10px 10px 0px 0px;
box-sizing:border-box;
padding:25px;
line-height:50px;
}
#center{
height:375px;
box-sizing:border-box;
}
#left{
width:50%;
height:375px;
box-sizing:border-box;
float:left;
margin:30px auto;
padding:20px;
}
#right{
width:50%;
height:375px;
box-sizing:border-box;
float:right;
margin:30px auto;
padding:20px;
}
#down{
height:150px;
border-radius:0px 0px 10px 10px;
box-sizing:border-box;
padding-left:50px;
}
u{
  width:25px;
  text-decoration-color:navy;  
}
.txt{
width:80%;
height:40px;
margin:15px auto;
border-radius:5px;
}

.btn{
width:80%;
font-size:30px;
color:white;
background:linear-gradient(60deg,#7ed6df,#8e44ad);
}
</style>
</head>
<body>
<div id="outer">
<div id="inner">
<div id="up"><h1><u>Re</u>gistration</h1></div>
<div id="center">
<div id="left">
Full Name<br/><input type="text" placeholder="Enter Your Name" class="txt"/><br/>
Email<br/><input type="email" placeholder="Enter Your Email" class="txt"/><br/>
Password<br/><input type="password" placeholder="Enter Your Password" class="txt"/><br/>
Gender<br/>
<pre>
<input type="radio" name="gen" />Male                                <input type="radio" name="gen" />Female
</pre>
</div>
<div id="right">
User Name<br/><input type="text" placeholder="Enter Your User Name" class="txt"/><br/>
Phone Number<br/><input type="number" placeholder="Enter Your Number" class="txt"/><br/>
Confirm Password<br/><input type="password" placeholder="Confirm Your Password" class="txt"/><br/><br/><br/>
<input type="radio" name="gen" />Prefer not to say
</div>
</div>
<div id="down">
<center>
<input type="submit" class="btn" value="Register"/></center>
</div>
</div>
</div>
</body>
</html>