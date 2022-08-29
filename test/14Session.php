<?php 
   session_start();
   if(isset($_SESSION['username']))  {
	   echo "<h1>You are already Login</h1>";
   exit();
   }
?>
<html>
<body>
   <form method="post" >
   
   <table align="center" style="margin-top:200px;">
	<tr>
	   <td>Username :</td>
	   <td><input type="text" name="uname" ></td>
	   </tr>
	<tr>
	   <td>Password :</td>
	   <td><input type="password" name="pass" ></td>
	   </tr>
   <tr>
	  <td colspan="2" align="center" ><input type="Submit" name="submit"></td>
	  </tr>
   </table>
   </form>
   </body>
   </html>

<?php
   if(isset($_POST['submit'])) {
  $_SESSION["username"]=$_POST['uname'];
  header("Location:Session2.php");
   }
   
?>