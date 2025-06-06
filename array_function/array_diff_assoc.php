<?php

$a1=array("a"=>"yellow","b"=>"red","c"=>"green","d"=>"blue");
$a2=array("a"=>"yellow","b"=>"red","c"=>"green");
$result=array_diff_assoc($a1,$a2);
print_r($result);
?>
