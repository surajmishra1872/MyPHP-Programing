<?php

$str="Hello World";
echo("By Using convert_uuencode function:".convert_uuencode($str));
echo PHP_EOL;
echo ("By using conver_uudecode function:".convert_uudecode(convert_uuencode($str)));

?>