<?php

class myException extends Exception
{
    function errorMessage()
    {
        $error="My exception Message".$this->getMessage().
        "Errro in line number".$this->getLine();
        return $error;  
    }

}

function divison($n)
{
    try{
    if($n>0)
    {
        throw new exception("Enter Valid number");
        echo PHP_EOL;
    }
    if($n==-1)
    {
        echo PHP_EOL;
        throw new myException("New exception");
    }
    $res=5/$n;
    echo $res;
}
catch(exception $xyz)
{
echo $xyz->getMessage();
}
catch(myException $e)
{
echo $e->errorMessage();
}
finally
{   echo PHP_EOL;
    echo "This is finnaly block and its run always...";
    echo PHP_EOL;
}

}
//divison(4);
//divison(0);
divison(-1);


?>