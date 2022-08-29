<!--                                    GET and POST Requests in PHP -->

<!-- 
GET  method sends data  in url (By default) 
POST method sends data  hiddenly
 -->


<?php
if(isset($_REQUEST['submit'])) {
    $email = $_REQUEST['email'];
    $passw = $_REQUEST['pass'];
    echo "Your email address is " .$email."<br>";
    echo "Your Password is " .$passw."<br>";
}

?>

<html lang="en">
<body>
<form action="Tut21.php" method="post">         <!--      get by default -->
<br><br><br><br><br>
<table  border="1" align="center">

<tr>
<td>Enter Email Id:</td>
<td><input type="text" name="email" required></td>
</tr>

<tr>
<td>Enter Password</td>
<td><input type="password" name="pass" required></td>
</tr>

<tr>
<td colspan="2" align="center"><input type="submit" name="submit" required></td>
</tr>

</table>
</form>    
</body>
</html>