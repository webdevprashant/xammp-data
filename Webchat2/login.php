<?php
session_start();
include 'dbh.php';

$uname=$_POST['uname'];
$pass=$_POST['pass'];

$sql= "SELECT * FROM users WHERE Username='$uname' AND Password='$pass'";
$result=$conn->query($sql);

if (!$row=$result->fetch_assoc()) {
?>
<script>
	  alert('Username or Password not match Please Try Again....! !');
         window.open('index.php','_self');
		</script>	  
		 <?php
}
  
else {
	
	$_SESSION['name']=$_POST['uname'];
	header("Location:home.php");
}
?>