<?php
   if (isset($_POST["forgotPass"])) {
   $conn= new mysqli("localhost:3307" , "root","", "mydatabase");
   $email=$conn->real_escape_string($_POST["email"]);
   
   $data= $conn->query("Select uid from users where email='$email'");
   if ($data->num_rows >0) {
    $str="0123456789";
	$str=str_shuffle($str);
	$str=substr($str , 0,6);
  $conn->query("UPDATE users SET Password='$str' WHERE email='$email'");  
   echo "<script>alert('Your New Login Password is $str')</script>";
  }
   else {
      echo "Please Check Your inputs:";
	  }
	  }
?>
<html>
<body>
<a href="index.php"><-Back</a><br><br>
<form action="forgotpass.php" method="post">
  <input type="text" name="email" placeholder=" Enter your Email" required><br>
  <input type="Submit" name="forgotPass" value=" Generate New Password">
  
  
 </form>
<body>
</html>