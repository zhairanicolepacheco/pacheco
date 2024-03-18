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
        $username = $_POST["un"];
        $password = $_POST["psw"];
        $confirmPassword = $_POST["psw2"];
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

        if (empty($password)) {
            $errors[] = "Password is required.";
        }
        if (empty($confirmPassword)) {
            $errors[] = "Confirm Password is required.";
        }

        if ($password !== $confirmPassword) {
            $errors[] = "Confirm password does not match";
        }

        echo "<br>";

        $emailDuplicate = "SELECT Email_Address FROM student_table WHERE Email_Address = '$email'";
        $emailResult = mysqli_query($con, $emailDuplicate);
        $emailRows = mysqli_num_rows($emailResult);
        
        if ($emailRows > 0) {
            $errors[] = "Email has Duplicate";
        }
        
        $usernameDuplicate = "SELECT Username FROM student_table WHERE Username = '$username'";
        $usernameResult = mysqli_query($con, $usernameDuplicate);
        $usernameRows = mysqli_num_rows($usernameResult);
        
        if ($usernameRows > 0) {
            $errors[] = "Username has Duplicate";
        }
        
        if (!empty($errors)) {
            foreach ($errors as $error) {
                echo $error . "<br>";
            }
        } 
        else {
             $insert = "INSERT INTO student_table VALUES ('', '$studId', '$lname',
            '$fname', '$mname', '$age', '$bday', '$rel', '$add', '$contact', '$email', '$username', '$password')";

            mysqli_query($con, $insert);
        }

       
    }  
?>
