<?php
   include("lib/config.php");
   session_start();

    $error = '';
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      
       // username and password sent from form 
      $myusername = mysqli_real_escape_string($conn,$_POST['email']);
      $mypassword = mysqli_real_escape_string($conn,$_POST['pw']); 
      
      $sql = "SELECT email FROM user WHERE email='".$myusername."' AND pw='".$mypassword."'";
      $result = mysqli_query($conn,$sql);
        if($result == false) {
         die("<pre>Query failed: ".$conn->error."\n$sql</pre>");
      }
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
      if($count == 1) {
         $_SESSION['login_user'] = $myusername;
         header("location: index.php");
      }
       else {
         $error = "Invalid Email or Password";
      }
   }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js">
    </script>
    <! [endif]-->
    <title>Swap Book :: Textbook Trades for WSU Students</title>
    <meta charset="UTF-8">
    <!-- If IE use the latest rendering engine -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Set the page to the width of the device and set the zoon level -->
    <meta name="viewport" content="width = device-width, initial-scale = 1">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="css\sbmain.css" rel="stylesheet">
</head>
    
<body>
    <!--header top-->
        <div class="menu" style="height:80px">
            <div class="container-fluid">
		      <div class="navbar-header">
			     <a href="about.php"><img src="img/SBLogo.png" alt="SB Logo" style="height:30"/></a></div>
                <div>
                <span style="float:right; padding:none; top:25px; right:50px; position:absolute"><a href="register.php">Sign Up</a></span>
                </div>
        </div>
    </div>
    <!--end Header-->
    
    <main>
        <div class="wrapper fadeInDown">
        <div id="formContent">
            <!-- Tabs Titles -->
                    <!-- Icon -->
                    <div class="fadeIn first">
                        <h2>Log In</h2>
                    </div>
                    <!-- Login Form -->
                    <form action = "" method = "post">
                        <input type="text" id="login" class="fadeIn second" name="email" placeholder="WSU Email">
                        <input type="password" id="password" class="fadeIn third" name="pw" placeholder="Password">
                        <input type="submit" id="login" class="fadeIn fourth" value="Log In">
                    </form>
            <div style = "font-size:0.85rem; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>
                    <!-- Remind Password -->
                    <div id="formFooter">
                        <a class="underlineHover" href="#" style="text-decoration: none">Forgot Password?</a>
                    </div>
            </div>
            </div>
    </main>
    
    <footer>
        <div id="footer">
            <div id="copyright"><br>
                <section id="copyright">Copyright &copy; 2019 Swap Book&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Privacy&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Terms of Use&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="contact.html" style="text-decoration: none; color: #cccccc">Contact Us</a></section><br>
            </div>
        </div>
    </footer>
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script> 
</body>
</html>