<h1 align="center">LOOPS IN PHP PT2 ForEach Loop</h1>

<!-- 
Syntax -    foreach(nameofarray as alias)   {
                    statements;
                }
-->

<?php
$arr1 = array("num1"=>1,'num2'=>2,3,4,5);
foreach($arr1 as $a) {
    echo $a." <br>";
}
foreach($arr1 as $key=>$a1) {
    echo $key."=>".$a1."<br>";
}
$arr2 = array("SUN" , "MON" , "TUE" , "WED" , "THU", "FRI" , "SAT");
foreach ($arr2 as $a2) {
    echo $a2." "; 
}

?>