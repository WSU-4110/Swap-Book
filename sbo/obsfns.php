<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "swapbk";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    require_once("tallyObserver.php");
    require_once("contactObserver.php");
    require_once("offers.php");

    $contact = new contactObserver();
    $offers->attach($contact);
    $tally = new tallyObserver();
    $offers->attach($tally);
    $offers->contactUser(user_id);
    $offers->incrTally(book_id);
    $subject->detach($tally)
?>