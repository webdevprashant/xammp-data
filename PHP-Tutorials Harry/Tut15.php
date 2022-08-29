<!--                                        For Each Loop in PHP -->

<!-- 
- For loop is used when we want to iterate array or Object

 -->

<?php
$arr = array('banana' , 'Apples' , 'Harpic' , 'Bread' , "Butter");

// for($i=0 ; $i < count($arr) ; $i++) {
//     echo "$arr[$i]<br>";
// }

//                        Bettr way to do this use foreach loop

foreach($arr as $value) {
    echo $value."<br>";
}
?>