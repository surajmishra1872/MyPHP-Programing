<?php

$str="Hello<b>Suraj</b><i>Mishra</i>";
echo(strip_tags($str));
echo PHP_EOL;
echo strip_tags($str,"<b>");// here <b> tag allowed.
echo PHP_EOL;

echo wordwrap($str,3,":",True);

?>