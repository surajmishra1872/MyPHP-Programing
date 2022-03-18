<html>
<head>
<style>
table,th ,td{
	border:2px groove gray;
	border-collapse:collapse;
	font-size:18px;
	text-align:center;
}
th
{
	background-color:navy;
    color:white;	
}
input,select
{
	width:300px;
	height:30px;
}

</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<form action="#" method="get">
<table style="width:100%;border:none;">
<tr >
<td style="border:none;">City Code:<input type="text" name="ccode" required placeholder="City Code"/></td>
<td style="border:none;">City Name:<input type="text" name="cname" required placeholder="City Name"/></td>
</tr>
<tr>
<td style="border:none;">Country Name:<select name="county" id="cars">
  <option value="">--Select Country--</option>
  <option value="India">India</option>
  <option value="US">US</option>
  <option value="London">London</option>
  <option value="Canada">Canada</option>
</select></td>
<td style="border:none;">
Satate Name:<select name="county" id="cars">
  <option value="">--Select Country--</option>
  <option value="Utter Pradesh">Utter Pradesh</option>
  <option value="Madhya Pradesh">Madhya Pradesh</option>
  <option value="Gujrat">Gujrat</option>
  <option value="Kerla">Kerla</option>
</select>
</td>
</tr>
<tr>
<td style="border:none;">Active:<input type="checkbox" name="status" value="Yes"></td>
</tr>
<tr>
<center>
<td style="border:none;">
<input type="Submit" value="Submit" name="save">
<input type="reset" value="Reset">
</td>
</center>
</tr>
</table>

</form>

<table style="width:100%;" id="tbl">
<tr>
<th>Edit</th>
<th>Delete</th>
<th>CountryName</th>
<th>StateName</th>
<th>CityName</th>
<th>CityCode</th>
<th>Active</th>
<th>CreateBy</th>
<th>CreateDate</th>
<th>ModifiedBy</th>
<th>ModifiedDate</th>
</tr>
<tr>
<td><a href="#"><i class="fa fa-pencil" style="font-size:25px;"></i></a></td>
<td><a href="#"><i class="fa fa-trash-o" style="font-size:25px;"></i></a></td>
<td>India:IN</td>
<td>Gujrat:GJ</td>
<td>Ahemdabad</td>
<td>AMD</td>
<td>Yes</td>
<td>ADMIN:ADMIN</td>
<td>04-Feb-2022 01:03 AM</td>
<td></td>
<td></td>
</tr>
</table>
</body>
</html>