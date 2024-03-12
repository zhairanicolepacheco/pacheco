<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>REGISTRATION FORM</title>
</head>
<body>
    <div class = "box-container">
        <div class="header-container">
            <h1>REGISTRATION FORM</h1>
        </div>
        <div id="phpHandler">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") 
        {
            $studId = $_POST["studId"];
            $fullName = $_POST["fullName"];
            $un = $_POST["un"];
            $bday = $_POST["bday"];

            if (empty($studId)){
                echo "<p>Registration Failed!</p><br>";
            }
            else if (empty($fullName)) {
                echo "<p>Registration Failed!</p><br>";
            }
            else if (empty($un)) {
                echo "<p>Registration Failed!</p><br>";
            }
            else if (empty($bday)) {
                echo "<p>Registration Failed!</p><br>";
            }
            else {
                echo "<p>Registered Successfully</p><br>";
                echo "<p>Student Number: $studId</p><br>";
                echo "<p>Full Name: $fullName</p><br>";
                echo "<p>Username: $un</p><br>";
                echo "<p>Birthdate: $bday</p><br>"; 
            }
            
        }  
        ?>
        </div>
    </div>
</body>
</html>
