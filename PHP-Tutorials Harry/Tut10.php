<!--                                        If - Else  in PHP -->

<?php
$a=55;
$b=10;

// if($a>60) {
//     echo "A is greater than 60<br>";
// }
// else {
//     echo "A is not greater than 60<br>";
// }

$age = 30;

//                          This is if else ledder , only 1 statement executes at a time
// if($age>18) {
//     echo "You can drink alcohol with chai and water<br>";
// }
// elseif($age>15) {
//     echo "You can drink chai and water , NO alcohol for you<br>";
// }
// else {
//     echo "You can drink with wanter only<br>";
// }

//                          This is if , if else ledder , 1st if executed then in if-else 1 statement executes at a time

if($age>18) {
    echo "You can drink alcohol with chai and water<br>";
}
if($age>15) {
    echo "You can drink chai and water , NO alcohol for you<br>";
}
else {
    echo "You can drink with wanter only<br>";
}
echo "Done<br>";


//                  Quiz
$age1 = 75;
if ($age1>18 and $age1<=65) {
    echo "You can drive";
}
elseif ($age1<18) {
    echo "You can drive b/w min 25 and max 65 ";
}
elseif ($age1>65) {
    echo "You can't drive bcz of over age ";
}
else{
    echo "You can't drive";
}
?>