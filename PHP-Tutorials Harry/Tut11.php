<!--                                        Switch Case Statements in PHP -->

<!-- 
1. switch case statements are same as if else statements
2. we give a var to switch to check with specific condition by using case statements
3. If we don't use break stmt after case, then if 2nd case True, then all below case will execute 
 -->

<?php
$age = 12;

switch($age) {
    case 12:
        echo "Your age is 12<br>";
        break;
    case 56:
        echo "Your age is 56<br>";
        break;
    case 34:
        echo "Your age is 34<br>";
        break;
    default:
        echo "Your age is weird<br>";
        break;
}
?>