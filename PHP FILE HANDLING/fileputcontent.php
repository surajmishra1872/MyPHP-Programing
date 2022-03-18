<?php

echo file_put_contents("filecontents.txt","This is testing lines.\n",FILE_APPEND| LOCK_EX);


?>