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

}

$obj=new student();
$srl= serialize($obj);
echo $srl;


?>