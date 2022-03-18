<?php

include_once __DIR__."/dbconnection.php";

$formdata = json_decode(file_get_contents("php://input"),true);
$request_type=$_SERVER['REQUEST_METHOD'];
$param=explode("/",$_SERVER['REQUEST_URI']);
$resource=@$param[count(@$param)-2];
$id=@$param[count(@$param)-1];

switch($request_type):
case"GET":
process_get($id);
break;
case"POST":
process_post($id);
break;
case"PUT":
process_put($id);
break;
case"DELETE":
process_delete($id);
break;
case"PATCH":
process_patch($id);
break;

default:
die("Invalid Request");
exit();
endswitch;
function process_get($id='')
{
	global $resource;
	global $conn;
	if($id=='')
	{  
         $sql="select * from {$resource};";  
	}
	if($id)
	{  
         $sql="select * from {$resource} where id={$id};";  
	}
		  $res = mysqli_query($conn,$sql);
		  $records=mysqli_fetch_all($res,MYSQLI_ASSOC);
		 // print_r($records);
	
if($records==true)
   {
	$response=array(
		'code'=>200,
		'status'=>true,
		'message'=>"! .....Record Found..... !",
		'data'=>$records,
	);
   }
else
   {
	$response=array(
		'code'=>201,
		'status'=>false,
		'message'=>"! .....Record Not Found..... !",
		'data'=>[],
	);
}
header("Content-Type:application/json");
http_response_code(200);
echo json_encode($response,JSON_PRETTY_PRINT);
exit();
}

function process_post(){
     global $resource;
     global $conn;
	 global $formdata;
	 
	 $name=$formdata['name'];
	 $email=$formdata['email'];
     if(isset($formdata)){
         // $sql = "INSERT INTO emp(name,email) values('{$name}','{$email}');";

          try{
               if($res=mysqli_query($conn,"INSERT INTO {$resource}(name,email) values('{$name}','{$email}');")){
                    $id = mysqli_insert_id($conn);
                    
                    $response = array(
                         'code'=>200,
                         'status'=>true,
                         'message'=>'Record Inserted Successfully.',
                         'error'=> false,
                         'data'=> [
                              'id' => $id
                         ],
                    );
               }else{
                     throw new Exception;
               }
          }catch(Exception $e){
               $response = array(
                    'code'=>201,
                    'status'=>false,
                    'message'=>'Cannot Insert Record.',
                    'error'=>$e->getMessage(),
                    'data'=>[]
               );
          }
          
          header("Content-Type:application/json");
          http_response_code(200);
          echo json_encode($response,JSON_PRETTY_PRINT);
          exit();
     }
}

function process_delete($id){
     //method :post formdata _method = DELETE
     global $resource;
     global $conn;
     try{
      if(mysqli_query($conn,"delete from {$resource} where id={$id};"))
     {
          $response = array(
               'code'=>200,
               'status'=>true,
               'message'=>'Record Deleted Successfully.',
               'error'=> false,
               'data'=> [],
          );
     }
     else{
          throw new Exception();          
     }
          
     }
     catch(Exception $e){
          $response = array(
               'code'=>201,
               'status'=>false,
               'message'=>'Record not Deleted  Successfully.',
               'error'=> $e->getMessage(),
               'data'=> []
          );
          
     }
     

     header("Content-Type:application/json");
     http_response_code(200);
     echo json_encode($response,JSON_PRETTY_PRINT);
     exit();

}
function process_patch($id='')
{
	
}
function process_put($id='')
{
     global $resource;
     global $conn;
     global $formdata;
     $name=$formdata['name'];
	$email=$formdata['email'];
     

     try{
          if(mysqli_query($conn,"update {$resource} set name='{$name}',email='{$email}' where id={$id};"))
     {
          $response = array(
               'code'=>200,
               'status'=>true,
               'message'=>'Record Updated Successfully.',
               'error'=> false,
               'data'=> [
                    'id' => $id,
                    'name'=>$formdata['name'],
                    'email'=>$formdata['email']
               ],
          );
     }
     else{
          throw new Exception();
          
     }
          
     }
     catch(Exception $e){
          $response = array(
               'code'=>201,
               'status'=>false,
               'message'=>'Record Updated not  Successfully.',
               'error'=> $e->getMessage(),
               'data'=> []
          );
          
     }
     


     header("Content-Type:application/json");
     http_response_code(200);
     echo json_encode($response,JSON_PRETTY_PRINT);
     exit();
}


?>