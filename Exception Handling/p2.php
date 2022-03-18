<?php

function divison($n)
{
    try{
    if($n<=0)
    {
        throw new exception("Enter Valid number");
        echo PHP_EOL;
    }
    if($n==3)
    {
        echo PHP_EOL;
        throw new exception("are ...rere...Dekho bhaiya humko 3 se problem hai so 3 na input karo...");
    }
    $res=5/$n;
    echo $res;
}
catch(exception $xyz)
{
echo $xyz->getMessage();
}
finally
{   echo PHP_EOL;
    echo "This is finnaly block and its run always...";
    echo PHP_EOL;
}

}
divison(4);
divison(0);
divison(-1);
divison(3);

?>