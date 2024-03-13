<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "firstconnection";

    $con = new mysqli($servername, $username, $password, $database);

    
    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
        $studId = $_POST["studId"];
        $lname = $_POST["lastName"];
        $fname = $_POST["firstName"];
        $mname = $_POST["middleName"];
        $age = $_POST["age"];
        $bday = $_POST["bday"];
        $rel = $_POST["religion"];
        $add = $_POST["add"];
        $contact = $_POST["contact"];
        $email = $_POST["email"];

        $insert = "INSERT INTO student_table (Student_No, Student_ID, 
        Last_Name, First_Name, Middle_Name, Age, Birthday, Religion,
        Address, Contact_No, Email_Address) VALUES ('', '$studId', '$lname',
        '$fname', '$mname', '$age', '$bday', '$rel', '$add', '$contact', '$email')";
        mysqli_query($con, $insert);
    }  
?>