<?php
if(5>3)
{
    echo "Have a Good Day!";
    echo '<br>';
}
$t=14;
if($t == 14)
{
    echo " Have a good day!";
    echo "<br>";
}
echo "<br>";
$x=date("H");
echo "$x";
echo "<br>";
if($t<"14")
{
    echo "Have a Good day!";
}
 else 
{
     echo "Have a good night!";
}
echo "<br>";
$x=date("H");
echo "$x";
if($x < "6")
{
    echo "have a good morning";
}
elseif($x<"20")
{
    echo"have a good day";
}
else
{
    echo "have a good night";
}
echo "<br>";
$a=5;
if($a<10)$b="Hello";
echo $b;
echo "<br>";
echo "<br>";
$p=13;
$b=$p<10?"Hello":"Good Bye";
echo $b;
echo "<br>";
echo "<br>";
$a=13;
if($a>10)
{
    echo "Above 10";
    if($a>20)
    {
        echo " and also above 20";
        echo "<br>";
    }
    else
    {
        echo " but not above 20";
        echo "<br>";
    }
}

?>