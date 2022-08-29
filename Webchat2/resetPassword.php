<?php
 if (isset($_GET["email"]) && isset($_GET["Password"])) {
  $conn= new mysqli("localhost:3307","root" , "" , "mydatabase");
  
  $email=$conn->real_escape_string($_GET["email"]);
  $Password=$conn->real_escape_string($_GET["Password"]);
  $data=$conn->query("SELECT uid FROM users WHERE email='$email' AND Password='$Password'");
  
  if ($data->num_rows > 0) {
	$str="0123456789qwertyuioplkjhgfdsamn";
	$str=str_shuffle($str);
	$str=substr($str , 0,15);
    $password=shal($str);	
	  $conn->query("UPDATE users SET password='$password' where email='$email'");
	  echo "Your password is: $str";
  }
  else {
	  echo "Please Check Your Link :";
  }
  }
 else {
 header("Location: loginform.php");
 exit();
 }
 ?>