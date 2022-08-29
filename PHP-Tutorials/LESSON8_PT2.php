<h1 align="center">FUNCTIONS IN PHP PT2 </h1>

<?php
    function conct($a1,$b1) {
        echo $a1." ". $b1;
    }
conct('Prashant' , 'Sir<br>');
conct('WWE' , 'WWF<br>');

$fname='Lord of Darkness';
$lname=1999;
conct($fname , $lname."<br>");
// conct($fname );                             //  Gives error
conct($fname,$lname."<br>" , $lname);             //  Give argu len = fn Here it ignores 3rd parameter 


function add($n1,$n2) {
    return $n1+$n2;   
    // return $n1,$n2;      # Gives error bcz fn returns only 1 value, not more than 1    
}

echo "Sum of Fn Add is : ".add(12,28)."<br> Sum of Fn Add is : ".add(30,40);
?>