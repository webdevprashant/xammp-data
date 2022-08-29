<html>
<body>
<form method="post" action="storeimg.php" enctype="multipart/form-data">
<input type="file" name="img1" required="required">
<input type="submit" name="submit" value="Upload">
</form>
</body>
</html>
<?php
if(isset($_POST['submit'])) {
	$imgname=$_FILES['img1']['name'];  // storing file name
	$tempimgname=$_FILES['img1']['tmp_name']; // temp name store
	$conn= new mysqli('localhost:3307','root','','phpdb') or die(mysqli_error());
move_uploaded_file($tempimgname,"images/$imgname");
$sql="INSERT INTO `storeimg`(`Images`) VALUES ('$imgname')";
$run=mysqli_query($conn,$sql);
     	echo "Upload Success";
}

?>