<?php

$age=array("Naresh"=>"19","Vivek"=>"17","Harsh"=>"18");
asort($age);

foreach ($age as $x=>$x_value)
{
    echo "Key=".$x.",Value=".$x_value;
    echo '<br>';
}
?>

