<?php
$conn=new mysqli('localhost:3308','root','','sttms');
function showdata() {
	global $conn;

	$query = "SELECT * FROM montt";    
	$run = mysqli_query($conn , $query);
	if($run == true) {       ?>
		<table align="center" border=3 , width="100%">
<tr align="center"  style="font-size:30px;"><b>
		<td>Period</td>
		<td>1</td><td>2</td><td>3</td>
		<td>4</td><td>5</td><td>6</td>
		<td>7</td><td>8</td><td>9</td>
		<td>10</td>
		<td>Update</td></b>
</tr>
		<?php
		  while($data= mysqli_fetch_array($run)) {
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
<td style="font-size:20px;"><a href="update1monform.php?id=<?php echo $data['id']; ?>">Edit</a></td>
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
<h4><a href="../admindash.php" style="float:left;font-size:20px;color:black;"><-Back</a></h4>
<h1 align="center"> Monday Classes Schedule</h2>
<br>

<?php showdata();   ?>
</body>
</html>