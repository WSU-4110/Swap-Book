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

    $first_name = '';

    $sql = "INSERT INTO custinfo (first_name, last_name, email, pw)
    VALUES ('$first_name', '', '','')";

    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    }

    else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
?>