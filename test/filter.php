<?php
$email_a='prashantpapa@gmail.com';
$email_b='prashantpapa@emailcom';

if(filter_var($email_a,FILTER_VALIDATE_EMAIL)) {
	echo "This ($email_a) email address is considered valid.<br>";
}

else {
	echo "This ($email_a) email address is considered invalid.<br>";
}
if(filter_var($email_b,FILTER_VALIDATE_EMAIL)) {
	echo "This ($email_b) email address is considered valid.<br>";
}

else {
	echo "This ($email_b) email address is considered invalid.<br>";
}
?>
