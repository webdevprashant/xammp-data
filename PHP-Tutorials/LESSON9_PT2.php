<h1 align="center">INCLUDE_ONCE AND REQUIRE_ONCE IN PHP PT2 </h1>
<?php
// include 'LESSON3.php';
// include 'LESSON3.php';              // Here file include 2 times means all code print 2 times -->

//              USE include_once
include 'LESSON3.php';
require 'LESSON3.php';
include_once 'LESSON3.php';
require_once 'LESSON3.php';
?>

<!-- 
If you don't know you included any file or not,just use include/require_once fn
If file already included then it didn't include again
Else include 

Same process in include and require

 -->