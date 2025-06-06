<?php
// an array that represents a possible records set returned from a database

$a=array(
    array(
        'id'=> 1,
        'first_name'=> 'Naresh',
        'last_name'=> 'Choudhary',
    ),
    array(
        'id'=> 2,
        'first_name'=> 'Harsh',
        'last_name'=> 'shah',
    ),
    array(
        'id'=> 3,
        'first_name'=> 'vivek',
        'last_name'=> 'munjyasara',
    )
);
$last_names = array_column($a,'id');
print_r($last_names);
?>

