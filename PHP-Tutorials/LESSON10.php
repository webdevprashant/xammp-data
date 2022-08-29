<h1 align="center">GLOBAL VARIABLES IN PHP </h1>

<?php
$a=' Lord of';
$b=' Darkness';

function ex() {
    global $a;                  // Method 1
    echo $a;
}
function ex1() {
    echo $GLOBALS['b'];         // Method 2
    echo $GLOBALS['a'].$GLOBALS['b'];
}
ex();
ex1();
?>