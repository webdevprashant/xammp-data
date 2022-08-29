<!--                                            Functions in PHP -->

<?php
function sumofmarks($arr) {
    $sum=0;                                     //  define and initialize sum var = 0                                 
    foreach($arr as $v) {                       //  give alias name of $arr as $v
        $sum += $v;                             //  sum=sum + v, sum store value if arr and calculate total sum of arr   
    }
    return $sum;                                // fn return total sum of array
}


function avgmarks($arr) {                       
    $i=1;                                       //  define and initialize i var = 1
    $sum=0;                                     //  define and initialize sum var = 0
    foreach($arr as $av) {                      //  give alias name of $arr as $v
        $sum+=$av;                              //  sum=sum + v, sum store value if arr and calculate total sum of arr   
        $i++;                                   // increment i in each iteration of loop
    }
    return $sum/$i;                             //  total sum/ total length of i = (Avg)

}

$arr = [88,89,90,91,92,93];

echo "The total marks out of 600 is ".sumofmarks($arr);
echo "<br>";
echo "The Average marks out of 600 is ".avgmarks($arr);

?>