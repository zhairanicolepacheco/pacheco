<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "firstconnection";

    $con = mysqli_connect($servername, $username, $password, $database);

    
?>
<!-- if (!$con) {
        die("Connection Failed: " . mysqli_connect_error());
    }
    echo "Connected Successfully!"; -->