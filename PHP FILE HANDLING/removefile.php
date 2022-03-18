<?php

if(file_exists("testfile.txt"))
{
	unlink("testfile.txt");
}
else
{
	echo "File does not exist...?";
}


?>