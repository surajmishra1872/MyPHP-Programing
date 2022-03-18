<?php

function division($n)
{
try
{
if($n<=0)
{
throw new exception("Please Enter Valid Number.....");
}
echo 5/$n;
}
catch(exception $e)
{
echo $e->getMessage();
}
}

division(2);

?>