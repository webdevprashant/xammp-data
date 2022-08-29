<!--                                        Do While Loop in PHP -->

<!-- 
Do while executes at least at once, then check condition
do {
    some line of code execute here;
    increment;
} while(condition);
-->

<?php
// $a=77;              //  Condition false but executes at least once
// do {
//     echo $a;        //  print value of a = 77
//     $a++;           //  then increment
// } while ($a<10);    //  Condition false Loop break
//                  O/P - 77
$b=0;
do {
    echo $b." ";            //  print value of b
    $b++;                   //  increment
} while ($b<=10);           //  print ubtil b is less than equal to 19 O/p - 0 1 2 3 4 5 6 7 8 9 10
?>