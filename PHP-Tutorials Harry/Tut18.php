<!--                                 Associative Array in PHP -->

<!-- 
array('this' , 'that' , 'these')            This array is called indexed values

-->
<?php
$favcolor  = array("Shubham"=>'red' , "Rohan"=>'green' , 'Prashant'=>'black' , 8=>'yellow');        // Asso. array

echo $favcolor['Prashant']."<br>";                  // print prashant's fav color
echo $favcolor[8]."<br>";                           // print 8's fav color

foreach($favcolor as $key => $v) {                  // Give alias name of $favcolor as key=>value
    // echo "<pre>$key => $v</pre>";
    echo "Favourite color of $key is $v<br>";       // print until loop ends
}
?>