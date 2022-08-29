<!--                                 Scope , Local & Global Variables in PHP -->

<?php
$a=98;                          //  Global variable
$b=9;                           //  Global variable
function printvar() {
    global $a,$b;               // Give me access to this global variable
    // $a=88;                   // Local var
    $a=100;$b=1000;             //  Change global variables permanently
    echo "The value of variable is $a and $b <br>";
}

echo $a."<br>";
printvar();
echo "The value of variable is $a and $b <br>";

echo var_dump($GLOBALS)."<br>";
echo var_dump($GLOBALS['a'])."<br>";
echo var_dump($GLOBALS['b'])."<br>";
?>