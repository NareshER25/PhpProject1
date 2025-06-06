<?php

$age=array("peter"=>"35","ben"=>"23","joe"=>"33");
krsort($age);
foreach ($age as $x=>$x_value)
{
    echo 'key='.$x. ",value=".$x_value;
    echo '<br>';
}
?>
