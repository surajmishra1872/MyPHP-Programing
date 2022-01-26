<?php

$str="Hello";

echo("This is Md5 function With False(Raw):\n".md5($str,False));

echo("\nThis is Md5 function With False(Raw):".md5($str,True));

echo("\n This sha1 function with False(Raw):".sha1($str,False));
echo("\n This sha1 function with False(Raw):".sha1($str,True));
?>