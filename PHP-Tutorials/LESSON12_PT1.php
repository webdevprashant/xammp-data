<h1 align="center">SUPERGLOBALS  $_GET IN PHP </h1>
<br>
<br>
<br>
<br>
<html>
<body>
<form action="LESSON12_pt1data.php" method="get">       <!-- method=get by default-->
<table border="1" align="center" width=40%>

<tr>
<td>Enter Your name : </td>
<td><input type="text" name="name" placeholder="Enter Your name"></td>
</tr>

<tr>

<td>Enter Address : </td>
<td><textarea name="address" placeholder="Enter Address"></textarea>
</tr>

<tr>
<td>Gender</td>
<td>Male<input type="radio" name="gender" value="Male">FeMale<input type="radio" name="gender" value ='Female'></td>
</tr>

<tr>
<td colspan="2" align="center"><input type="submit" name="submit" value="Submit"></td>
</tr>

</table>
</form>
</body>
</html>