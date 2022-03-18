<?php

if(file_exists("newfile.txt"))
{
	rename("newfile.txt","testfile.txt");
}
else
{
	echo "File does not exist...?";
}


?>