<!-- In php not must to write interger in index like arr[0] , arr[1] , also write string Ex- arr['ab'] -->

<!-- Array Rules in PHP
1. Not must to specify data type in array , and write same data type in array index arr[0] , arr[1]
2. Index no can be int , float , string etc.
3. Not must Index starts with 0 , starts with any random value or str bcz In PHP array follows key=>values  
arr[0]=5;       index=data
 -->
<h1 align="center">ARRAY IN PHP  PT1</h1>
<?php

$arr1 = array();
$arr1[0]=2;
$arr2['a']=5;

echo $arr1[0]."<br>";
echo $arr2['a']."<br>";

$arr2 = array(12 , 'Here');
echo $arr2[0]."<br>";
echo $arr2[1]."<br>";


$arr3 = array(10=>22 , 'x'=>'Lord of darkness');
echo $arr3[10]."<br>";
echo $arr3['x']."<br>";
?>