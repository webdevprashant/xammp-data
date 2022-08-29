<h1 align="center">
<?php
session_start();
  if(isset($_SESSION['username'])) {
  echo "Welcome ".$_SESSION['username'];
  }
  else {
	  echo "You are not login";
	  header("Location:Session.php");
  }
?>
</h1>
<h2>
<a href="Session3.php" style="float:right;">Logout</a>