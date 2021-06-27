<?php
    $host = "fdb32.awardspace.net";
    $username = "3870579_web";
    $pass = "Cherry2206";
    $dbname = "3870579_web";
    
    $conn = mysqli_connect("$host", "$username", "$pass", "$dbname");
    
    if ($conn->connect_error) {
    error_log("Connection failed: " . $conn->connect_error );
    } else {
    error_log('Connected!');
    }
?>