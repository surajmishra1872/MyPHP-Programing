<?php

//wap in php to show class and Object in php

class Tv{

var $model1='XL TV';
var $type='LED';
var $price=5000;
var $color='Black';
var $varient='Curved';

public function showInformation()
{
echo "The Model for ".__CLASS__."{$this->model}\n";
echo "The Type  for ".__CLASS__."{$this->type}\n";
echo "The Price for ".__CLASS__."{$this->price}\n";
echo "The Color for ".__CLASS__."{$this->color}\n";
echo "The Varient for ".__CLASS__."{$this->varient}\n";
}

public function volume()
{

echo "Volume Up";

}
}

$tv=new Tv();
$tv->showInformation(); //method calling for function

echo "TV Volume will be: ";
echo "{$tv-> volume()}";
?>