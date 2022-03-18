<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajax File Upload</title>
    <style>
        img{
            width: 100px;
            height: 100px;
        }
        table,th,tr,td{
            border: 2px solid green;
            border-collapse: collapse;
            font-size: 20px;
        }
        td
        {
            padding-left: 300px;
        }
        input
        {
            width:300px;
            height:30px;
            border: 3px solid gold;
            
        }
        input[type="file"]
        {
            border: none;
        }
        form
        {
            margin-left: 400px;
            margin-bottom:40px; 
        }
        input[type="submit"]
        {
            margin-left: 170px;
            background-color: green;
            color: white;
            font-size: 24px;
            height: 50px;
        }
    </style>
</head>
<body>
    <form id="upform" >
        Enter Yor Name<input type="text" name="name" id="nameid">
        <input type="file" name="image" id="fileid"><br/><br/>
        <input type="Submit" value="Upload" id="sbtn"/>
</form>
<div id="record"></div>
<script src="jquery/jquery.js"></script>
<script>
    $(document).ready(function(){
        function loadTable(){
                $.ajax({
                    url:"load.php",
                    type:"POST",
                    success:function(data)
                    {   
                        $("#record").html(data);                
                    }
                });
            } 
            loadTable();
        $("#upform").on("submit",function(e){
            e.preventDefault();
            var formdata=new FormData(this);

            $.ajax({
                url:"upload.php",
                data:formdata,
                method:"POST",
                contentType:false,
                processData:false,
                success:function(data)
                {
                    if(data==1)
                        {
                            $("#upform")[0].reset()
                        loadTable();
                        }
                        else
                        {
                            $("#upform")[0].reset()
                            alert("Data not Insrted Successfully");
                        }
                }

            });
        });
    });
</script>
</body>
</html>