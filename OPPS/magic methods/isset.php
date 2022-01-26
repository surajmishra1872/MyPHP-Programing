<?php
class name{
public $name="Suraj Mishra";
private $fname="Anand Mishra";
protected $mname="Rekha Mishra";
private $record=["fname"=>"Anand","address"=>"Allahabad"];

public function __construct($name,$fname,$mname)
{
	$this->name=$name;
	$this->fname=$fname;
	$this->mname=$mname;
}
public function __isset($property)
{
if(isset($this->$property))
{
	echo "Value is set...\n";
	echo($this->$record[$property]);
	
}
else
{
	echo "Value is not set.....";
}
}

}

$obj=new name("Shivay Singh Oberoi","Shakti Singh Oberoi","Pooja singh oberoi");
isset($obj->fname);


?>