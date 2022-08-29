<h1 align="center">LOOPS IN PHP PT1 For, Do , While Loop</h1>

<!--                    FOR LOOP -->
<?php
for ($j=0; $j <=10; $j++) { 
    echo "Square of ".$j. " is :".$j*$j ."<br>";
}   
$arr = array(1,2,3,4,5,6,7,18, 9,0);
for($i=0 ; $i<=9; $i++) {
    echo $arr[$i] ."<br>";
}

 
//                     WHILE LOOP   - Also called Entry Control Loop

$k=0;
while($k <=15) {
    echo $k." , ";
    $k++;
}

$arr1=array(1,2,3,4,5,6,7,8,9,10);

$l=0;
while($l <= 9) {
    echo "<br>".$arr1[$l];
    $l++;
}


//                     DO WHILE LOOP
echo "<br>";
$arr2 = array(10,1,2,3,4,5,6,7,8,9,10);
$m=0;
do {
    echo $arr2[$m]." ";
    $m++;
}while($m<=10);
?>  