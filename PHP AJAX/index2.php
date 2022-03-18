<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP AJAX CRUD OPERATION</title>
    <style>
        #h1
        {
            width: 100%;
            height:80px;
            background-color:navy;
            text-align: center;
            font-size:50px;
            color:white;
            font-style:italic;
            box-sizing: border-box;
            margin:0px auto;
            line-height: 80px;
        }
        #fr
        {
            width: 100%;
            height: 150px;
            text-align: center;
            margin:30px auto;
            font-size: 25px;
        }
        input
        {
            width:300px;
            height:30px;
            border: 1px solid green;
        }
        table,th,td,tr
        {
            height: 25px;
            border-collapse:collapse;
            font-size: 25px;
        }
        th
        {
            background-color: orangered;
            color: white;
            font-style: bold;
        }
    </style>
</head>
<body>
   <div id="h1"> CRUD USING AJAX</div>
    <form id="fr">
        First-Name:<input type="text" id="fname">
        Last-Name:<input type="text" id="lname"><br/><br/>
        <input type="submit" value="Save" id="sbtn">
        <input type="button"  id="load-button" value="Show Data">
    </form> 
    <table border="2" style="width: 100%;" >
        <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
        </tr>
        <tbody id="table-data">
            
        </tbody>
    </table>
	<script src="jquery/jquery.js"></script>
    <script>
        $(document).ready(function(){
            $("#load-button").on("click",function(e){
                $.ajax({
                    url:"ajax-load.php",
                    type:"POST",
                    success:function(data)
                    {
                        $("#table-data").html(data);                
                    }
                });
            });
        });
    </script>
</body>
</html>