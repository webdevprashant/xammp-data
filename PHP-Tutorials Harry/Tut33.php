<!--                            Include and Require Records in PHP  -->

<?php
include 'Tut24.php';
// require 'Tut24.php';
echo "<br> Hello <br>";

$sql = "SELECT * FROM tut28";
$run = mysqli_query($conn , $sql);
$result = mysqli_num_rows($run);

echo $result." Records found in table Tut28 <br>";
?>
<table>
<tr>
<th>S No</th>
<th>Name</th>
<th>Email</th>
<th>Concern</th>
<th>DateTime</th>
</tr>
<?php
while ($row = mysqli_fetch_assoc($run)) {
    // echo $row['Sno']." " . $row['Name']. " ". $row['email']. " ". $row['Concern']." ". $row['dt']."<br>";    // Show Data Method 1 
    ?>
    <tr>                                     <!-- Show data using table-->
    <td><?php echo $row['Sno']  ?></td>
    <td><?php echo $row['Name']  ?></td>
    <td><?php echo $row['email']  ?></td>
    <td><?php echo $row['Concern']  ?></td>
    <td><?php echo $row['dt']  ?></td>
    </tr>
    <?php
}
?>
</table>
<?php