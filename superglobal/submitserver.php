<?php

if($_SERVER['REQUEST_METHOD']=="POST")
{
    //collect value of input field
    $name = htmlspecialchars($_REQUEST['fname']);
    if(empty($name))
    {
        echo "name is Empty";
    }
 else 
 {
      echo $name;  
    }
}

if($_SERVER['REQUEST_METHOD']=="GET")
{
    echo 'hell';
    $name = htmlspecialchars($_REQUEST['fname']);
    if(empty($name))
    {
        echo "Name is Empty";
    }
    if($name == "Naresh Choudhary")
    {
        echo "Naresh";
        
    }
    else
    {
        echo $name;
    }
   
}
?>
