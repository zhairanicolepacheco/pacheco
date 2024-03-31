<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "firstconnection";

    $mysqli = mysqli_connect($servername, $username, $password, $database);

    if (!$mysqli) {
        die("Connection Failed: " . mysqli_connect_error());
    }
    echo "Connected Successfully!";
?>