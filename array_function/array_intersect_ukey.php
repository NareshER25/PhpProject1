<?php

function myfunction($a,$b)
{
    if ($a===$b)
    {
        return 0;
        
    }
    return ($a>$b)?1:-1;
}

$a1=array("a"=>"Red","b"=>"green","c"=>"blue");
$a2=array("a"=>"blue","b"=>"black","e"=>"blue");

$result=array_intersect_ukey($a1,$a2,"myfunction");
print_r($result);
?>
