<html>
<head>
   <title>WebChat</title>
   <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div id="main">
          <div id="info">
                <h2>Login here</h2>
         <form action="login.php" method="post">
          <label><b>Username</b></label>
         <input type="text" name="uname" placeholder="Username" required><br><br>
          <label><b>Password&nbsp;</b></label>        
          <input type="password" name="pass" placeholder="Password" style="border:2px solid red;" required><br><br>
         <button style="background-color:black;color:white;style="text-decoration:none;" type="Submit">Login</button>

         </form>
       <form action="signup.php" method="post">
         <h2> If you don't have a account Sign Up here</h2>
           <label>Username:</label>
             <input type="text" name="uname" placeholder="Username" required><br><br>
           <label>E-mail Add:</label>
             <input type="text" name="Email" placeholder="Email" required><br><br>           

           <label>Password:</label>
             <input type="Password" name="Password" placeholder="Password" style="border:2px solid red;" required><br><br>  
              <button style="background-color:lightblue;color:white;" type="Submit" >Sign-Up</button>                     
			  </form></div>
</div>
</body>
</html>