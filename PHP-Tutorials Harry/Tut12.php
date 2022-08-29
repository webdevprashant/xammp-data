<!--                                        While Loop in PHP -->

<!-- 
1.  While loop checks condition first
2.  Then print some lines of code
3.  then incrementation/decrementation , check condition until condition false

 -->
<?php

$a=0;
$x=9;

// while($a<=30 && $x<40) {
//     echo ($a+1)."<br>";
//     echo $x."<br>";
//     $a+=10;
//     $x+=5;
// }

while($a <= 10) {
    echo $a."<br>";
    $a++;
}
echo "Loop Finished";
?>