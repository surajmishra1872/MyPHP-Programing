<?php
$str = '<a href="https://www.w3schools.com">Go to w3schools.com</a>';
$b= htmlentities($str,ENT_COMPAT);
echo PHP_EOL;
echo htmlentities($str, ENT_QUOTES);
echo PHP_EOL;
echo htmlentities($str, ENT_NOQUOTES);


echo PHP_EOL;
echo html_entity_decode($str);

echo PHP_EOL;
echo htmlspecialchars($str);

echo PHP_EOL;
echo htmlspecialchars_decode($str);
?>