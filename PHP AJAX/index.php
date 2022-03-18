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
            text-align: center;
        }
        th
        {
            background-color: orangered;
            color: white;
            font-style: bold;
        }
        .delete-btn
        {
            background-color: red;
            color: white;
            cursor: pointer;
        }
        .edit-btn
        {
            background-color: gold;
            color: white;
            cursor: pointer;  
        }
    </style>
</head>
<body>
   <div id="h1"> CRUD USING AJAX</div>
    <form id="fr">
        First-Name:<input type="text" id="fname">
        Last-Name:<input type="text" id="lname">
        <input type="hidden" id="fid"><br/><br/>
        <input type="submit" value="Save" id="sbtn">
        <input type="button"  id="edit-button" value="Save Changes" style="display: none;">
        <h1 id="xyz"></h1>
    </form> 
    <table border="2" style="width: 100%;" >
        <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        <tbody id="table-data">
            
        </tbody>
    </table>
	<script src="jquery/jquery.js"></script>
    <script>
        $(document).ready(function(){
            function loadTable(){
                $.ajax({
                    url:"ajax-load.php",
                    type:"POST",
                    success:function(data)
                    {
                        $("#table-data").html(data);                
                    }
                });
            } 
            loadTable();
            $("#sbtn").on("click",function(e){
                e.preventDefault();
                var fname=$("#fname").val();
                var lname=$("#lname").val();
                $.ajax({
                    url:"ajax-insert.php",
                    type:"POST",
                    data:{first_name:fname,last_name:lname},
                    success:function(data)
                    {
                        if(data==1)
                        {
                        loadTable();
                        }
                        else
                        {
                            alert("Data not Insrted Successfully");
                        }
                    }
                });
            });
            $(document).on("click",".delete-btn",function(){
                var studentId=$(this).data("id");
                var element=this;
                //alert(studentId);
                $.ajax({
                    url:"ajax-delete.php",
                    type:"POST",
                    data:{id:studentId},
                    success:function(data)
                    {
                        if(data==1)
                        {
                            $(element).closest("tr").fadeOut();
                        }
                        else
                        {
                            alert("data not deleted..");
                        }
                    }
                });
            });
  //edit Logic           
         
         $(document).on("click",".edit-btn",function(){
            $("#edit-button").show();
            var studenteId=$(this).data("eid");
            // alert(studenteId);
            $.ajax({
                url:"load-update-form.php",
                type:"POST",
                data:{eid:studenteId},
                success:function(data)
                {
                    if(data!=0)
                        {
                        var a=JSON.parse(data);
                        $("#fid").val(a.id);
                        $("#fname").val(a.first_name);
                        $("#lname").val(a.last_name);
                        }
                        else
                        {
                            alert("data not fetched for update..");
                        } 
                }
            });
         });

//update records

$("#edit-button").on("click",function(e){
                e.preventDefault();
                var fname=$("#fname").val();
                var lname=$("#lname").val();
                var fid=$("#fid").val();
                $.ajax({
                    url:"ajax-update-insert.php",
                    type:"POST",
                    data:{first_name:fname,last_name:lname,fid:fid},
                    success:function(data)
                    {
                        if(data==1)
                        {
                        loadTable();
                        $("#edit-button").hide();
                        $("#fr").trigger("reset");
                        }
                        else
                        {
                            alert("Data Not Updated");
                        }
                    }
                });
            });
        });
    </script>
</body>
</html>