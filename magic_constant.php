<?php
    class Fruits
    {
        public function myvalue()
        {
            
            //return __CLASS__;
            return __METHOD__;
            
        }
      
    }
      function myfun()
        {
            return __FUNCTION__;
           
        }
        
    $kiwi =new Fruits();
    echo $kiwi->myvalue();
    echo '<br>';
    echo __DIR__;
    echo '<br>';
    echo __FILE__;
    echo '<br>';
    echo myfun();
    echo '<br>';
    echo __LINE__;
    echo '<br>';
    
?>



