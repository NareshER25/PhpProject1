<?php

$age=array("Naresh"=>"19","Harsh"=>"16","vivek"=>"17");
arsort($age);

foreach($age as $x=>$x_value)
{
    echo "key=".$x.",value=".$x_value;
    echo "<br>";
}
?>
