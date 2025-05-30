<?php
class vegetable
{
    
    
}
class fruit 
{
    public  $name;
    public $color;
    
    function set_name($name)
    {
        $this->name=$name;
        
    }
    function get_name()
    {
        return $this->name;
    }
    function set_color($color)
    {
        $this->color=$color;
    }
    function get_color()
    {
        return $this->color;
    }
}

$apple =new fruit();
$ladyfinger=new vegetable();
$apple->set_name('apple');
$apple->set_color('Red');
echo "Name: " .$apple->get_name();
echo '<br>';
echo 'Color: '.$apple->get_color();
echo'<br>';
echo "Directly acessing through object <br> Name ".$apple->name ."<br>";
echo 'color :'.$apple->color."<br>";
$apple->name="Bhagyashree";
$apple->color="Rainbow";
echo 'Directly acessing through object <br> Name '.$apple->name ."<br>";
echo 'color :'.$apple->color."<br>";
echo '<br><br>';
echo $apple instanceof fruit ? "Class Found":"Class Not found";
echo "<br>";
echo $ladyfinger instanceof vegetable ? "Class Found":"Class Not found";
?>



        
