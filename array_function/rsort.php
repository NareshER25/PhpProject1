<?php

$cars=array("bmw","jaguar","audi");
rsort($cars);
$clength=count($cars);
for ($x=0;$x<$clength;$x++)
{   
    echo $cars[$x];
    echo "<br>";
}
?>
