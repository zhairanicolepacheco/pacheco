<?php 
session_start();
include("config.php");
if (!isset($_SESSION["studId"])) {
    header("location: login.php");  
} else if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {    
        $studId = $_SESSION["studId"];

        $lname = $_POST["lastName"];
        $fname = $_POST["firstName"];
        $mname = $_POST["middleName"];
        $age = $_POST["age"];
        $bday = $_POST["bday"];
        $rel = $_POST["religion"];
        $add = $_POST["add"];
        $contact = $_POST["contact"];
        $email = $_POST["email"];
        $username = $_POST["un"];
        $errors = [];
        
        if (empty($studId)) {
            $errors[] = "Student ID is required.";
        }
        if (empty($lname)) {
            $errors[] = "Last Name is required.";
        }
        if (empty($fname)) {
            $errors[] = "First Name is required.";
        }
        if (empty($mname)) {
            $errors[] = "Middle Name is required.";
        }
        if (empty($age)) {
            $errors[] = "Age is required.";
        }
        if (empty($bday)) {
            $errors[] = "Birthday is required.";
        }
        if (empty($rel)) {
            $errors[] = "Religion is required.";
        }
        if (empty($add)) {
            $errors[] = "Address is required.";
        }
        if (empty($contact)) {
            $errors[] = "Contact is required.";
        }

        echo "<br>";

        if (empty($email)) {
            $errors[] = "Email is required.";
        }

        if (empty($username)) {
            $errors[] = "Username is required.";
        }

        echo "<br>";

        
        if (!empty($errors)) {
            foreach ($errors as $error) {
                echo $error . "<br>";
            }
        } else {
            $update = "UPDATE student_table 
                       SET Last_Name = '$lname', First_Name = '$fname', Middle_Name = '$mname', 
                           Age = '$age', Birthday = '$bday', Religion = '$rel', Address = '$add', 
                           Contact_No = '$contact', Email_Address= '$email', Username = '$username'
                       WHERE Student_ID = '$studId'";
        
            mysqli_query($con, $update);
        
            echo "<script>alert('UPDATE COMPLETE!');
                  window.location = 'index.php';</script>";
        }        
    }  
?>
