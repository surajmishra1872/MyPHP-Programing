<?php

if(file_exists("Dummy Folder"))
{
	rmdir("Dummy Folder");
	echo "File Deleted Successfully...";
}
else
{
	echo "Folder does not exist...?";
}


?>