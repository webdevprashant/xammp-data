<!--                    SOLUTION OF 1 Problem -->

<?php
session_start();
    if(isset($_SESSION['Uname']))  {                    // if uname is set in session
        echo "<h1 align='center'>You are Already login</h1>";
        exit();

    }
?>

<h1 align="center">SUPER GLOBAL $_SESSION PT 2, 3 IN PHP </h1>
<!-- 
In pt 2 we fix some problems of  part 1
1. User can't login in multiple tabs . if he already logged in
2. User can't access welcome file without login
3. When we load L14pt1 and L14pt1Welcome page, then it shows a notice 

 -->
<html>
<body>
<form method="post">
<table target="_blank" align="center">
<tr>
<td>Enter Username : </td>
<td><input type="text" name="name"> </td>
</tr>

<tr>
<td>Enter Password : </td>
<td><input type="password" name="pass"> </td>
</tr>

</tr>
<td><input type="submit" name="submit" value="Submit"> </td>
</tr>
</table>
</form>
</body>
</html>

<?php
//          SOLUTION of 3 Problem
if(isset($_POST['submit'])) {
    $_SESSION['Uname']=$_POST['name'];
    header('location:LESSON14_PT2Welcome.php');
}
?>