<?php

$age=array("peter"=>"35","ben"=>"37","joe"=>"43");
ksort($age);
foreach ($age as $x=>$x_value)
{
    echo "key".$x.",values=".$x_value;
    echo "<br>";
}
?>

