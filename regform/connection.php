<?php
    $servername = "localhost";
    $username = "root";
    $password = "";

    $con = mysqli_connect($servername, $username, $password);

    // if (!$con) {
    //     die("Connection Failed: " . mysqli_connect_error());
    // }
    // echo "Connected Successfully!";
    
    if ($con -> connect_error) {
        die("Connection Failed: " . $con -> connect_error);
    }
   
    $sql = "CREATE DATABASE FirstConnection";
        if ($con -> query($sql) === TRUE) {
            echo "Database Created Successfully!";
        } else {
            echo "Error Creating Database: " . $con -> error;    
        }
    $con -> close();
?>