<?php

if(file_exists("dummy.txt"))
{
	echo readfile("dummy.txt");
	copy("dummy.txt","newfile.txt");
}
else
{
	echo "File does not exist...?";
}


?>