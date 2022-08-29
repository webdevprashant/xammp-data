<h1 align="center">SUPER GLOBAL $_SESSION PT 1 IN PHP </h1>
<html>
<body>
<form method="post" >
<table align="center">
<tr>
<td>Enter Username : </td>
<td><input type="text" name="name"> </td>
</tr>

<tr>
<td>Enter Password : </td>
<td><input type="password" name="pass"> </td>
</tr>

</tr>
<td><input type="submit" name="submit" value="Submit"> </td>
</tr>
</table>
</form>
</body>
</html>

<?php
session_start();

$_SESSION['Uname1']=$_POST['name'];                 // Create session var called Uname and set name in Session Var
?>