<h1 align="center">SUPERGLOBALS $_FILES IN PHP </h1>


<html>
<body>
<form method="post" enctype="multipart/form-data">      <!-- This attribute is for only file upload -->
<table border="1" align="center">

<tr>
<td>Upload Your file from here</td>
<td> <input type="file" name ="f1" value="Upload"></td>
</tr>

<tr>
<td colspan="2" align="center"> <input type="submit" name ="submit" value="Submit"></td>
</tr>

</table>
</form>
</body>
</html>

<?php
// echo $_FILES['f1'];     // Give error bcz arr to str conversion , And $_FILES is 2D array and have Key - Values
echo "<pre>";
print_r($_FILES['f1']);    // See Full details about file
echo "</pre><br><br>";

echo($_FILES['f1']['name'])."<br>";
echo($_FILES['f1']['size']);
?>