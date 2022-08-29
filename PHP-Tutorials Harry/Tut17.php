<!--                                 Data Function: Handling Dates in PHP -->

<!-- 
l - Returns Week 
D - Returns short week
S - Returns rd,th,nd Ex - 9th , 3rd
d - Returns Date
j - Returns Date    (But d returns date in 01,02,03 format and j returns - 1,2,3)
g - Returns Hour(1-12)
i - Returns minutes
A - 
 -->
<?php
echo "Today Day is ".date('l')."<br>";
echo "Today Date & Week is ".date('d l')."<br>";
echo "Today Date is ".date('j S')."<br>";
echo "Today details  is ".date('jS F Y')."<br>";
echo date('l jS F Y h:i:s A')."<br>";
$year=date('Y');
echo "Copyright $year"."| All rights reserved"; 
?>