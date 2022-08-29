<h1 align="center">Retrive Data From Database with PHP</h1>
<!-- // echo "<pre>";
// print_r($data);          // Method 1 -->

<?php 

$conn= new mysqli('localhost:3308' , 'root' , '' , 'csetutsdb');
$sql = "select * from student";
$run = mysqli_query($conn , $sql);

if ($run==True) {
    ?>
    <table align="center" border="1" width="50%" style="margin-top: 100px;">
    <tr  align="center">
    <td>Roll No</td>
    <td>Name</td>
    <td>Standard</td>
    <td>Address</td>            </tr>
    <?php
        while($data=mysqli_fetch_assoc($run)) {
            ?>
            <tr  align="center">
<td><?php echo $data['Rollno']; ?></td>
<td><?php echo $data['Name']; ?></td>
<td><?php echo $data['Standard']; ?></td>
<td><?php echo $data['Address']; ?></td>
        </tr>
        <?php
    }
    ?>
        </table>
        <?php
}
    else {
        echo "No data";
    }

        ?>