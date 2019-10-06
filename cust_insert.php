<?php

    $con = mysqli_connect('localhost','root','');

    if(!$con){
        echo 'Not Connected to Server';
    }

    if(!mysqli_select_db('$con','sbcustomer')){
        echo 'Database Not Selected';
    }

    $email = $_POST['email'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $pw = $_POST['pw'];
    $create_date = date('m/d/Y h:i:s a', time());

    $sql = "INSERT INTO custinfo (email, first_name, last_name, pw) VALUES ('$email', '$first_name', '$last_name', '$pw')";

    if(!mysqli_query($con,$sql)){
        echo 'Not Inserted';
    }
    else{
        echo 'Inserted';
    }
    
    header("refresh:2; url=index.html", FALSE, 307);
?>
