<!-- This file belongs to LESSON14_PT2Welcome.php File-->
<!-- And Part of LESSON14_PT3   HOW TO DESTROY SESSION -->
<?php

session_start();
unset($_SESSION['Uname']);              // Method 1 (Use useful when 1 value set in session)
// session_destroy();                      // Method 2 (Useful when multiple value set in session )
header('location:LESSON14_PT2.php');        