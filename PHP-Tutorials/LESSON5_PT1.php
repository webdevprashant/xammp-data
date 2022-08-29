<h1 align="center">OPERATORS IN PHP     PT1</h1>

<!-- 
1.  Concatenation Operators         (.)
2.  Arithmetic Operators            (+ , - , /, * , %)
3.  Assignment Operators            (=)
4.  Increment/Decrement Operators   (++,--)
5.  Comparison Operators            (==,===,<,>,<= , >=)
 -->

 <?php
                // 1
$str1="Hello ";
$str2="Welcome to Raw is War <br>";

    echo $str1. " ".$str2;

                // 2 , 3
 $x=100;
 $y=20;

 echo $x+$y ."<br>";
 echo $x-$y ."<br>";
 echo "Multiply is " .$x*$y ."<br>";
 echo "Division is " .$x/$y ."<br>";
 echo "Modulus  is " .$x%$y ."<br>";
 
                // 4
// $x++;
    echo $x++."<br>";       # print 100 value of x then increment After print x=101
    echo $x."<br>";         # Now print 101 
    echo $x--."<br>";       # print 101 bcz of above stmt value of x then decrement After print x=100
    echo $x."<br>";         # Now print 101 
 ?>