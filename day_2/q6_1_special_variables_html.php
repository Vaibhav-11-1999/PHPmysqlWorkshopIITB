<!DOCTYPE html>
<html>

<form action="q6_1_special_variables_html.php" method = 'GET' >
    <input type='text' name= 'a'><br>
    <input type='text' name= 'b'><br>
    <input type='text' name= 'c'><br>
    <input type='submit' value='Click here'><br>
</form>

</html>
<?php

if(isset($_GET['a']))
    $a = $_GET['a'];
else
{
    $a = "length not set";
}

if(isset($_GET['b']))
{
    $b = $_GET['b'];
}
else
{
    $b = "length not set";
}

if(isset($_GET['c']))
{
    $c = $_GET['c'];
}
else
{
    $c = "length not set";
}
echo $a."<br>" ;
echo $b."<br>" ;
echo $c."<br>" ;

if(($a==$b) && ($b==$c))
{
echo("Equilateral triangle");
}
else
if(($a==$b)  ($b==$c)  ($c==$a))
{
echo("Isosceles triangle");
}
else
if(($a!=$b && $b!=$c && $c!=$a))
{
echo("Scalene triangle");
}
return 0


?>