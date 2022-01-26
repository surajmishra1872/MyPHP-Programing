<?php

class student
{

public $name="suraj mishra";
public $age=20;
public $fathername="Anand Mishra";

public function __tostring()
{
return "We can not print object of ". __CLASS__ ;
}
}

$obj=new student();
echo $obj;


?>