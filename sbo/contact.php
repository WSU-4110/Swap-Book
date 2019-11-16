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
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <link href="css\sbmain.css" rel="stylesheet">
</head>

<?php include('sitenav.php'); ?>
    
<body>

<main>
    <div class= "contact-form">

</div>
    <div class="wrapper2"><br><br>
        <section class="instructions">CONTACT US</section>
        <form name="" id="contact-form" method = "post" action="">
            <input name="name" type="text" placeholder="Your Name" required><br>
            <input email="WSU Email" name="email" type="email" placeholder="Your WSU EMail" required><br>
            <!-- <input email="WSUemail" type="email" class="form-control" placeholder= "Your Wayne State Email" required><br> -->
            <select size="1" name="contactreason" id="contactreason" required><br>
                <option>Please select a topic...</option>
                <option value="ACC">Account Help</option>
                <option value="DISP">Swap Dispute</option>
                <option value="TECH">Technical Support</option>
                <option value="OTHER">Other</option>
            </select><br>
            <textarea name="message" placeholder="Please type your concern here..." rows="6" required></textarea><br>
            <input type="submit" class="form-control submit" value="SEND MESSAGE">
        </form>
    </div>
</main>
        
<footer>
    <div id="footer" class="clearfloat">
    <div id="copyright" class="clearfloat"><hr><br>
        <section id="copyright">Copyright &copy; 2019 Swap Book</section><br>
    </div>
    </div>
</footer>
    
</body>

</html>

