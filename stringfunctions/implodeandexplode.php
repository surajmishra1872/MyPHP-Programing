 <?php
/*
explode
implode 
join
*/

$txt1="Hello Suraj Kumar Mishra Kaise Ho.";
$txt2="Hello-Kishan-Kumar-Mishra-Kaise-Ho.";

print_r(explode(" ",$txt1,3));
echo PHP_EOL;
print_r(explode("-",$txt2,3));
echo PHP_EOL;
echo(implode(" ",explode(" ",$txt1)));
echo PHP_EOL;
echo(join(" ",explode(" ",$txt1)));

?>