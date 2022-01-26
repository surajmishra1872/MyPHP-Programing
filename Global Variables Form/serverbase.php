<?php

echo"<pre>";
print_r($_SERVER);
echo"</pre>";

echo($_POST['name'])."<br/>";
echo($_SERVER['HTTP_HOST']);

?>

//$_SERVER Always use post method