<?php

$conn=new mysqli('localhost:3307','root','','phpdb');

 function showdata() {
	 global $conn;
	 
	 $query="SELECT * FROM userdata";
      $run=mysqli_query($conn,$query);
	  if($run==true) {
		  ?>
		  <table align="center" border="1" width="80%;">
		  <tr>
		  <td>Name</td><td>E-mail</td>
		  </tr>
		  <?php
		  while($data= mysqli_fetch_assoc($run)) {
          ?>
		  <tr>
        <td> <?php echo $data['Name']; ?></td> 
 	<td><?php echo $data['EmailID']; ?></td>
        </tr>
<?php		
	  }
	  ?>
	  </table>
	  <?php
	  }
	  else {
		  echo "error";
	  }
 }
?>
<html>
<body>
<?php showdata(); ?>
</body>
</html>