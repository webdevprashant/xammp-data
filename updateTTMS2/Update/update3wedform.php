<?php
session_start();
   if(isset($_SESSION['uid'])) {
	   echo "";
   }
   else {
	   header('location: login.php');
   }
?>
<?php
include '../dbcon.php';
    $id = $_GET['id'];
    $sql="SELECT * FROM `wedtt` WHERE id='$id'";
    $run1=mysqli_query($conn,$sql);
    $data1=mysqli_fetch_assoc($run1);
?>
<?php
 $qr = "select * from wedtt where id = 1";
 include ('../dbcon.php');
 $run=mysqli_query($conn,$qr);
 if($run==true) {
	while($data= mysqli_fetch_assoc($run)) {
?>
<html>
<body  bgcolor="Lightskyblue">

<h4><a href="up3wed.php" style="float:left;font-size:20px;color:black;"><-Back</a>
<h1 align="center" style="font-size:40;">Update Wednesday Classes Time Table</h1>
</h4>
<br>
<br>
<br>
<form method="post" action ="update3weddata.php?sid=<?php echo $data['id'] ?>">  
<table align="center" border=1>  

<tr>
<td><label> Enter Class & Semester : </label></td>         
<td><input type="text" name="class" id="class" size="30" value='<?php echo $data1['Period']; ?>' required></td> 
<td align="center"><?php echo $data['Period']; ?>    </td>
</tr>

<tr>
<td><label> Enter Subject Information 1:  </label></td>         
<td><input type="text" name="sub1" id="sub1" size="30" value='<?php echo $data1['1']; ?>' ></td> 
<td align="center"><?php echo $data['1']; ?>    </td>
</tr>

<tr>
<td><label> Enter Subject Information 2:  </label></td>         
<td><input type="text" name="sub2" id="sub2" size="30" value='<?php echo $data1['2']; ?>' ></td>
<td align="center"><?php echo $data['2']; ?>    </td>
</tr>

<tr>
<td><label> Enter Subject Information 3:  </label></td>         
<td><input type="text" name="sub3" id="sub3" size="30" value='<?php echo $data1['3']; ?>' ></td>
<td align="center"><?php echo $data['3']; ?>    </td>

</tr>

<tr>
<td><label> Enter Subject Information 4:  </label></td>         
<td><input type="text" name="sub4" id="sub4" size="30" value='<?php echo $data1['4']; ?>' ></td>
<td align="center"><?php echo $data['4']; ?>    </td>
</tr>

<tr>
<td><label> Enter Subject Information 5:  </label></td>         
<td><input type="text" name="sub5" id="sub5" size="30" value='<?php echo $data1['5']; ?>' ></td>
<td align="center"><?php echo $data['5']; ?>    </td>
</tr>

<tr>
<td><label> Enter Subject Information 6:  </label></td>         
<td><input type="text" name="sub6" id="sub6" size="30" value='<?php echo $data1['6']; ?>' ></td>
<td align="center"><?php echo $data['6']; ?>    </td>

</tr>


<tr>
<td><label> Enter Subject Information 7:  </label></td>         
<td><input type="text" name="sub7" id="sub7" size="30"  value='<?php echo $data1['7']; ?>' ></td>
<td align="center"><?php echo $data['7']; ?>    </td>
</tr>


<tr>
<td><label> Enter Subject Information 8:  </label></td>         
<td><input type="text" name="sub8" id="sub8" size="30" value='<?php echo $data1['8']; ?>' ></td>
<td align="center"><?php echo $data['8']; ?>    </td>
</tr>

<tr>
<td><label> Enter Subject Information 9:  </label></td>         
<td><input type="text" name="sub9" id="sub9" size="30" value='<?php echo $data1['9']; ?>' ></td>
<td align="center"><?php echo $data['9']; ?>    </td>
</tr>


<tr>
<td><label> Enter Subject Information 10:  </label></td>         
<td><input type="text" name="sub10" id="sub10" size="30" value='<?php echo $data1['10']; ?>' ></td>
<td align="center"><?php echo $data['10']; ?>    </td>
</tr>
<?php } ?>
<tr>
<input type="hidden" name="id" value="<?php echo $data1['id']; ?>">
<td colspan=2 align="center"><input type="submit" name = "submit" value="Update"> </td> 
</tr>
</table>
<?php } ?>

</form>
</body>
</html>