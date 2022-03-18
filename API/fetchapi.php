<?

$result=file_get_contents('http://localhost:8000/api.php/emp/');
$data = json_decode($result);
echo"<pre>";
print_r($data);
echo"</pre>";

?>

