<h1 align="center">ARRAY IN PHP  PT2</h1>

<?php
//                          1 D Array
    $arr1=array();
    $arr1[12]='ABCD';        // index no 0 , if here index is 2 , then below +1 =3 ,smae process apply
    $arr1[4]=23;             // index no 1 BY default it takes +1 index no of last arr
    $arr1['a']=56;             
    $arr1[]=26;             
    $arr1[]=16;             
    $arr1['b']=16;             
    $arr1[]=16;             

    echo $arr1[12]."<br>";
    echo $arr1[4]."<br>";
    echo $arr1[13]."<br>";

    echo "<pre>";
    print_r($arr1);                 // print structure of array
    echo "</pre>";

//                          2 D Array

$arr2= array();

$arr2[0][0]=12;         // Method 1
$arr2[0][]=13;
$arr2[0][]=14;
$arr2[0][]=15;
$arr2[1][]=25;
$arr2[1][]=26;

// $arr2[0]=array(12 , 13 , 14 , 15);      // Method 2
// $arr2[1]=array(25 , 26);                // Method 2
echo $arr2[0][0];

echo"<pre>";
print_r($arr2);
echo"</pre>";
?>