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
    
<?php include('sitenav.php'); ?>
<?php include('lib\session.php'); ?>
<?php include('lib\usermenu.php'); ?>
    
<?php
    if(isset($_GET['bookid'])){
        $bookid = $_GET['bookid'];
        echo $bookid;
    } 
    else {
        echo "failed";
    }
   
    $ses_sql = mysqli_query($conn,"select * from book where book_id = '$bookid' ");
    $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
    $book_session = $row;
    $user_id = $book_session['user'];
    $image = $book_session['image'];
    $sql = mysqli_query($conn,"select * from user where id = '$user_id' ");
    $row = mysqli_fetch_array($sql,MYSQLI_ASSOC);
    $contact_session = $row;
    $contact = $contact_session['email'];
        
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
                                        <h4 class="text-center"><span class="label label-info">Swapper:&nbsp;<?php echo $contact_session['email']; ?></span></h4>
                                        <?php echo '<img src="img/book'.$image.'" width="50%" height="50%">' ?>
                                        <div class="caption">
                                            <div class="row">
                                                <div class="col-md-8 col-xs-8">
                                                    <h4><?php echo $book_session['Title']; ?></h4>
                                                </div>
                                                <div class="col-md-4 col-xs-4 price">
                                                    <h4><label>11th Edition</label></h4>
                                                </div>
                                            </div>
                                            <p>Paperback, Used</p>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <form action="" method="post">
                                                    <a class="btn btn-primary btn-product" input type="submit" value="Let's Swap"><input type="hidden" name="button_pressed" value="1" /><span class="glyphicon glyphicon-refresh"></span>&nbsp;Let's Swap!</a> 
                                                    </form>
                                                </div>
                                                <div class="col-md-6">
                                                    <a href="#" class="btn btn-success btn-product"><span class="glyphicon glyphicon-heart"></span>&nbsp;<?php echo $book_session['likes']; ?></a>
                                                </div>

<?php                                                
if(isset($_POST['button_pressed']))
{
    $to      = $contact_session['email'];
    $subject = 'Someone wants to swap books with you!';
    $message = "Can we trade books? Login now to see inventory from" .$login_session['email']. "!";
    $headers = 'From: bb8648@wayne.edu' . "\r\n" .
        'Reply-To: bb8648@wayne.edu' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

    mail($to, $subject, $message, $headers);

    echo 'Email Sent.';
}

?>
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