<?php

$name=array("naresh"=>"19","mahi"=>"18","sikki"=>"19","harsh"=>"19");
print_r(array_change_key_case($name, CASE_UPPER));
echo '<br>';
$names=array("NARESH"=>"19","MAHI"=>"18","SIKKI"=>"19","HARSH"=>"19");
print_r(array_change_key_case($names,CASE_LOWER));
?>