<?php

for($i=0;$i<=10;$i++)
{
if($i==5)
{
goto abc;
}
echo "This is Hello  From:",$i;
echo "\n";
}
abc:
echo("This line print thrue goto statement.");
?>