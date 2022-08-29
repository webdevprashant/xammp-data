<!--                            Select & Displaying Data in PHP -->

<?php
$conn = new mysqli('localhost:3307' , 'root' , '' , 'harrytut');
$sql = "SELECT * FROM `tut28`";
$run=mysqli_query($conn,$sql);

//      Find number of total rows in table
echo mysqli_num_rows($run)." Records found in tut28 table<br>";

//                                    Disply Data

// if($run > 0) {       //      Show Data manually          Method 1
//     // echo var_dump(mysqli_fetch_assoc($run))."<br>";
//     // echo var_dump(mysqli_fetch_assoc($run))."<br>";
//     // echo var_dump(mysqli_fetch_assoc($run))."<br>";
//     // echo var_dump(mysqli_fetch_assoc($run))."<br>";
// }

// while ($row=mysqli_fetch_assoc($run)) {         //  Show data using while loop  Method 2
//     echo $row['Sno'] ." ". $row['Name']." ".$row['email']." ".$row['Concern']." ".$row['dt']."<br>";
// }

//                              Show database records in table  Method 3
?>
<html lang="en">
<body>
  <table border="1" align="center" style="margin-top: 100px;">
 <tr>
  <th>Sno</th>
  <th>Name</th>
  <th>Email</th>
  <th>Concern</th>
  <th>dt</th>
 </tr>
  <?php
  while ($row = mysqli_fetch_assoc($run)) {
    ?>  
    <tr>
    <td><?php echo $row['Sno'] ?></td>
    <td><?php echo $row['Name'] ?></td>
    <td><?php echo $row['email'] ?></td>
    <td><?php echo $row['Concern'] ?></td>
    <td><?php echo $row['dt'] ?></td>
    </tr>
  <?php
  }
  ?>
    </table>  
</body>
</html>