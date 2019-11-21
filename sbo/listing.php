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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/page.css" rel="stylesheet">
</head>
    
    <?php 
    include('lib/config.php');
    include('sitenav.php');
    session_start();
   $user_check = $_SESSION['login_user'];
   $ses_sql = mysqli_query($conn,"select email from user where email = '$user_check' ");
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   $login_session = $row['email'];
   
    if(isset($_SESSION['login_user'])){
     include('lib/usermenu.php');
   }
?>
<body>

    
<main>
    <div class="d-flex justify-content-center" id="wrapper">
        <div id="page-content-wrapper">
            <div class="container-fluid" style="margin-top:50px">
                <div class="col-12 ">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="col-sm-6 col-md-4">
                                    <div class="thumbnail" >
                                        <h4 class="text-center"><span class="label label-info"><?php echo $login_session; ?></span></h4>
                                        <img src="img/cpp_malik_8thed" width="50%" height="50%">
                                        <div class="caption">
                                            <div class="row">
                                                <div class="col-md-8 col-xs-8">
                                                    <h4>C++ Programming: From Problem Analysis to Program Design</h4>
                                                </div>
                                                <div class="col-md-4 col-xs-4 price">
                                                    <h4><label>8th Edition</label></h4>
                                                </div>
                                            </div>
                                            <p>Paperback, Used</p>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <form action="obsfns.php" method="get">
                                                    <a class="btn btn-primary btn-product"><span class="glyphicon glyphicon-refresh"></span> Let's Swap!</a> 
                                                    </form>
                                                </div>
                                                <div class="col-md-6">
                                                    <a href="#" class="btn btn-success btn-product"><span class="glyphicon glyphicon-heart"></span> 5</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
        
 <footer>
    </footer>
</body>
</html>