<?php

class student
{

public $name="suraj mishra";
public $age=20;
public $fathername="Anand Mishra";


public function __sleep()
{
return array("name","fathername");
}

public function __wakeup()
{
echo "\nThis is wakeup function..............................";
}

}

$obj=new student();
//print_r($obj);
$srl= serialize($obj);
echo $srl;

$usrl=unserialize($srl);
print_r($usrl);

?>