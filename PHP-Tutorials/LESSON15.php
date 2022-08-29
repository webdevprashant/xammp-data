<h1 align="center">Super GLOBAL $_COOKIE In PHP</h1>

<?php

// Syntax - setcookie(name , value , expiry)

$value ="Prashant the Opportunist";
$expiry=time()+ 86400;
setcookie("name" , $value , $expiry);

// echo $_COOKIE['name'];

//                          How to Modify Above Cookie  - Simply change value and call again      

$value="Lord of Darkness";              # Modify Value of above cookie
$exp_cookie= time() - 86400;            # Gives error because cookie destroyed
setcookie("name" , $value , $exp_cookie);       
// echo $_COOKIE['name'];               // When run this line then cookie will destroy 
?>