<?php
include("config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    $lname = $_POST["lastName"];
    $fname = $_POST["firstName"];
    $mname = $_POST["middleName"];
    $contact = $_POST["num"];
    $email = $_POST["email"];
    $errors = [];
    
    if (empty($lname)) {
        $errors[] = "Last Name is required.";
    }
    if (empty($fname)) {
        $errors[] = "First Name is required.";
    }
    if (empty($mname)) {
        $errors[] = "Middle Name is required.";
    }
    if (empty($contact)) {
        $errors[] = "Contact is required.";
    }

    echo "<br>";

    if (empty($email)) {
        $errors[] = "Email is required.";
    }

    $emailDuplicate = "SELECT email_add FROM guest WHERE email_add = '$email'";
    $emailResult = mysqli_query($mysqli, $emailDuplicate);
    $emailRows = mysqli_num_rows($emailResult);
    
    if ($emailRows > 0) {
        $errors[] = "Email has Duplicate";
    }
    
    if (!empty($errors)) {
        foreach ($errors as $error) {
            echo $error . "<br>";
        }
    } 
    else {
        $insert = "INSERT INTO guest VALUES ('', '$lname',
        '$fname', '$mname', '$contact', '$email')";

        mysqli_query($mysqli, $insert);
    }
}  
?>