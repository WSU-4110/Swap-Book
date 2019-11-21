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
        <div class="menu">
            <div class="container-fluid">
		      <div class="navbar-header">
			     <a href="index.html"><span class="glyphicon glyphicon-user"></span><img src="img/logo.png" id="icon" alt="SB Logo"/></a></div>
                <div>
                <span style="float:right; padding:none">Have an account?&nbsp;<a href="login.php">Login</a></span>
                </div>
        </div>
    </div>
    <!--end Header-->
    
<main>
    <div class="wrapper fadeInDown">
        <div id="formContent" style="max-width: 750px">
            <div class="fadeIn first">
                <h2>Create an Account</h2>
                <p>You must have a valid WSU email address in order to register</p>
            </div>
            <!-- Registration Form -->
            <form method="post" action="lib\cust_insert.php" id="contact-form" onsubmit="">
                <input type="text" style="text-align: left" placeholder="First Name" name="first_name" id="first_name" class="fadeIn second" required><br>
                <input type="text" style="text-align: left" placeholder="Last Name" name="last_name" id="last_name" class="fadeIn third" required><br>
                <input type="text" style="text-align: left" placeholder="WSU Email" name="email" id="email" pattern=".+@wayne.edu" class="fadeIn fourth" required><br><!-- <p>Password must not be the same as username</p> -->
                <input type="text" style="text-align: left" autocomplete="off" placeholder="Password" name="pw" id="pw" class="fadeIn fifth" required><br>
                <p style="font-size:0.85rem; margin-bottom:0.2rem">Must be at least 8 characters, contain at least 1 uppercase character, and at least 1 number</p>
                <input type="submit" class="fadeIn fourth" name="submit" id="submit" value="Sign Up" class="fadeIn sixth">
            </form>
            
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