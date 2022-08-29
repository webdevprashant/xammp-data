<html>
<body>
<br>
<h1 align="center" style="font-size:50px;">DEI Faculty Of Science</h1>

<br>
<link href='style.css' rel='stylesheet' type='text/css'>

<div class="login">
  <div class="login-header">
    <h1>Student Login</h1>
  </div>
  <form action="index.php" method="post">
  <div class="login-form">
    <h3>Username:</h3>
    <input type="text" placeholder="Enter Username" name="uname" required><br>
    <h3>Password:</h3>
    <input type="password" placeholder="Enter Password" name="pass" required>
    <br>
    <input type="Submit" value="Login" class="login-button"  name="login" style="font-size:20px;">
    <br>
    <a class="sign-up">Sign Up!</a>
    <br>
    <h6 class="no-access">Can't access your account?</h6>
  </div>
</div>
</form>
<div class="error-page">
  <div class="try-again" style="text-decoration:none;margin-right:10px;font-size:25px;">Made By: - IOTIANS</div>
</div>
<?php

include 'dbcon.php';
if(isset($_POST['login'])) {
	$username= $_POST['uname'];
	$password= $_POST['pass'];
    $qry="SELECT * FROM `stulogin` WHERE username='$username' AND password='$password'";
    $run=mysqli_query($conn,$qry);	
    $row=mysqli_num_rows($run);
if($row < 1) {
      ?>
	  <script>
	  alert('Username or Password not match ! !');
         window.open('index.php','_self');
      </script>	  
		 <?php
}
else {
$data = mysqli_fetch_assoc($run);
$id=$data['id'];
session_start();
$_SESSION['uid']=$id;
header("Location:ShowTT\show1mon.php");
}	
}

?> 