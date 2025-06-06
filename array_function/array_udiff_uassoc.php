<?php

function myfunction_key($a,$b)
{
   
    if($a===$b)
    {
        return 0;
    }
    return ($a>$b)?1:-1;
}

function myfunction_value($a,$b)
{
    echo "$a<br>";
    echo "$b<br>";
    if($a===$b)
    {
        return 0;
    }
    return ($a>$b)?1:-1;
}

$a1=array("a"=>"red","b"=>"green","c"=>"blue");
$a2=array("a"=>"blue","b"=>"green","z"=>"green");

$result=array_udiff_uassoc($a1,$a2,"myfunction_value","myfunction_key");
print_r($result);
?>
