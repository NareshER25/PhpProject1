<?php

$temp_files=array("temp15.txt","Temp10.txt","temp1.txt","Temp22.txt","temp2.txt");
natsort($temp_files);
echo "natural Order: ";
print_r($temp_files);
echo '<br>';

natcasesort($temp_files);
echo "Natural order case insensitive: ";
print_r($temp_files);
?>

