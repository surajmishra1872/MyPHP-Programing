<?php
class name{
public $name="Suraj Mishra";
private $fname="Anand Mishra";
protected $mname="Rekha Mishra";


public function __construct($name,$fname,$mname)
{
	$this->name=$name;
	$this->fname=$fname;
	$this->mname=$mname;
}
public function __unset($property)
{
unset($this->$property);
}
}

$obj=new name("Shivay Singh Oberoi","Shakti Singh Oberoi","Pooja singh oberoi");
unset($obj->fname);
print_r($obj);

?>