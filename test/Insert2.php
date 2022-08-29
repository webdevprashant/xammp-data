<?php
$name=$_POST['name'];
$email=$_POST['email'];
$conn= new mysqli('localhost:3307','root','','phpdb');

$query="INSERT INTO `userdata`(`Name`, `EmailID`) VALUES ('$name','$email')";
$run=mysqli_query($conn,$query);
if($run==true) {
	echo "Data Insert Successfully <a href='Insert.php'>Click Here to Insert More</a>";
}
else {
	echo "Error";
}
?>