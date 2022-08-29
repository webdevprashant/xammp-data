<h1 align="center">OPERATORS IN PHP     PT2</h1>
<!--    5.  Comparison Operators            

==  - Compares only values not data type 
=== - Compare  values with data type
,<,>,<= , >=)
-->

<?php

$x=5;
// $y=5;
$y="5";

$a="Hello";
$b="hello";         # $a & b not equal bcz ascii no. is different in h & H
    // if ($x==$y) {
    // if ($x===$y) {
    if ($a===$b) {
        echo "Equal";
    }
    else {
        echo "Not Equal";
    }
?>