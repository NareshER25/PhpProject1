<?php

//$color=array("red","green","black");
//
//foreach ($color as $x)
//{
//    echo " $x <br>";
//}
//

//$name=array("Naresh"=>"25","Ben"=>"10","Hardik"=>"33");
//foreach ($name as $x => $y)
//{
//    echo "$x : $y <br>";
//}

//$harsh=array("Pk"=>"1","KK"=>"10","Naresh"=>"25","Hardik"=>"33");
//foreach ($harsh as $x => $y)
//{
//    echo "$x : $y <br>";
//}

//$color = array("red","green","blue","yellow");
//foreach ($color as &$x)
//{
//    if($x=="blue")
//        $x ="pink";
//            
//}
//var_dump($color);

// alternative syntax

$color=array("red","pink","blue");
foreach ($color as &$x):
    echo "$x <br>";
endforeach;

