<!--                                        Operators in PHP -->

<?php
/*
1. Arithmetic Operators
2. Assignment Operators
3. Comparision Operators
4. Logical Operators
*/

$a = 20;
$b = 8;
?>
                               
<h1 align="center">            Arithmetic Operators</h1>
<?php
echo "a + b = ". ($a+$b)."<br>";
echo "a - b = ". ($a-$b)."<br>";
echo "a * b = ". ($a*$b)."<br>";
echo "a / b = ". ($a/$b)."<br>";
echo "a % b = ". ($a%$b)."<br>";
echo "a ** b = ". ($a**$b)."<br>";
?>

<h1 align="center">            Assignment Operators</h1>
<?php
echo "a += b = ". ($a+=$b)."<br>";
echo "a -= b = ". ($a-=$b)."<br>";
echo "a * b = ". ($a*$b)."<br>";
echo "a / b = ". ($a/$b)."<br>";
echo "a % b = ". ($a%$b)."<br>";
echo "a ** b = ". ($a**$b)."<br>";
?>


<h1 align="center">            Comparision Operators</h1>

<?php
echo "a > b = ". var_dump($a>$b)."<br>";
echo "a < b = ". var_dump($a< $b)."<br>";
echo "a <> b = ".var_dump($a<>$b)."<br>";
?>


<h1 align="center">            Logical Operators</h1>

<?php
$a=true;
$b=false;


echo "a AND b = ". var_dump($a and $b)."<br>";
echo "a OR b = ". var_dump($a or  $b)."<br>";
echo "a != b = ".var_dump($a!=$b)."<br>";
?>  