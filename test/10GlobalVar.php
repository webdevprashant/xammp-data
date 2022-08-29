<?php
$fname="Prashant";
$lname="Kumar";
 /*function ex() {
	 echo $fname;
 }
 */
 
 function ex() {
   global $fname;	
	echo $fname;
 }
 function ex2() {
	echo $GLOBALS['lname'];
	
 }
ex();
ex2();
?>