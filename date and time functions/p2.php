<?php

echo "<h1>";
echo"Hourse in Formate of H:".date("H")."<br/>";
echo"Hourse in Formate of h:".date("h")."<br/>";

echo"Hourse in Formate of G:".date("G")."<br/>";
echo"Hourse in Formate of g:".date("g")."<br/>";

echo"Minut in Formate of i:".date("i")."<br/>";

echo"Second in Formate of s:".date("s")."<br/>";

echo"Meridiem in Formate of a:".date("Ha")."<br/>";
echo"Meridiem in Formate of A:".date("HA")."<br/>";
echo "Current Time is:".date("H:i:s a")."<br/><br/><br/>";


echo "Time After Set Time Zone"."<br/><br/>";

date_default_timezone_set('asia/kolkata');

echo"Hourse in Formate of H:".date("H")."<br/>";
echo"Hourse in Formate of h:".date("h")."<br/>";

echo"Hourse in Formate of G:".date("G")."<br/>";
echo"Hourse in Formate of g:".date("g")."<br/>";

echo"Minut in Formate of i:".date("i")."<br/>";

echo"Second in Formate of s:".date("s")."<br/>";

echo"Meridiem in Formate of a:".date("Ha")."<br/>";
echo"Meridiem in Formate of A:".date("HA")."<br/>";

echo "Current Time is:".date("H:i:s a");

echo "</h1>";
?>