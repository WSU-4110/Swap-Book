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

    $sql = "INSERT INTO custinfo (first_name, last_name, email, pw)
    VALUES ('$_POST[first_name]','$_POST[last_name]','$_POST[email]','$_POST[pw]')";

    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
        header('Location: index.html');
    }

    else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
?>