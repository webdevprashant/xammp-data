<?php
session_start();
   if(isset($_SESSION['uid'])) {
	   echo "";
   }
else {
	header('location: ../index.php');
}
?>
<?php
$conn=new mysqli('localhost:3308','root','','sttms');

function showdata() {
	global $conn;

	$query = "SELECT * FROM montt";
	$run = mysqli_query($conn , $query);
	
	if($run == true) {       ?>
		<table align="center" border=3 , width="100%">
<tr align="center" style="font-size: 30px;">
		<td>Period</td>
		<td>1</td><td>2</td><td>3</td>
		<td>4</td><td>5</td><td>6</td>
		<td>7</td><td>8</td><td>9</td>
		<td>10</td>
</tr>
		<?php
		  while($data= mysqli_fetch_assoc($run)) {
   ?>
		<tr align="center">
	  <td><?php echo $data['Period']; ?>    </td>
	  <td><?php echo $data['1']; ?> </td>
	  <td><?php echo $data['2']; ?> </td>
	  <td><?php echo $data['3']; ?> </td>
	  <td><?php echo $data['4']; ?> </td>
	  <td><?php echo $data['5']; ?> </td>
	  <td><?php echo $data['6']; ?> </td>
	  <td><?php echo $data['7']; ?> </td>
	  <td><?php echo $data['8']; ?> </td>
	  <td><?php echo $data['9']; ?> </td>
	  <td><?php echo $data['10'];?> </td>
	  </tr>

<?php
		  }
		  ?>
</table>               	
		<?php
		}
		else {
			echo "Error";
		}
}
?>

<html>
<body>
<head>
<style>
.first	h1 {
	color:green;
}
.first p {
	color:red;
}
.first {
	padding: 20px;
}
.first a {
	text-decoration: none;
	background-color: black;
	padding: 15px;
	color: white;
}

.first a .sec:hover {
	background-color: white;
	color: black;
}
</style>
<link rel="stylesheet" type="text/css" href="st.css">
</head>
<h1 align="center" style="color:red;margin-left:130px;">Monday Classes Schedule 
<a href="logout.php" style="float:right;font-size:20px;margin-right:15px;margin-top:5px;" name="logout">Logout</a>
</h1>
<!-- <h3 style="float: right;"><a href="../index.php">Logout</a></h3> -->

	<input type="checkbox" id="check">
    <label for="check">
      <i class="fas fa-bars" id="btn"></i>
      <i class="fas fa-times" id="cancel"></i>
    </label>
    <div class="sidebar">
      <header>Only For Admin</header>
	  
	  <a href="../adminlogin/login.php" class="active">
        <i class="fas fa-qrcode"></i>
        <span>Admin Login</span>
      </a>
	  
	  <a href="#">
	  <i class="far fa-envelope"></i>
	  <span>Login</span>		</a>

	  <a href="#">
		<i class="far fa-envelope"></i>
		<span>Sign Up</span>	</a>
	  
		<a href="show1mon.php">
        <i class="far fa-envelope"></i>
        <span>Exit</span> 	</a>
    </div>
	<br><br><br><br>
<?php showdata();   ?>
	<br><br><br><br>
    <div class="first" align= "center"> 
		<a  href="show6sat.php"> Previous</a> 
        <a class="sec"  href="show1mon.php">MON</a> 
        <a class="sec"  href="show2tue.php">TUE</a> 
        <a class="sec"  href="show3wed.php">WED</a> 
        <a class="sec"  href="show4thu.php">THU</a> 
        <a class="sec"  href="show5fri.php">FRI</a> 
        <a class="sec"  href="show6sat.php">SAT</a> 
        <a  href="show1mon.php">Next</a> 
    </div>
</body>
</html>