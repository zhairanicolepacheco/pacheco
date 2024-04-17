<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="register_style.css">
    <title>Registration Page</title>
</head>

<body>
<div class = "signup">
        <h2>REGISTRATION FORM</h2>
        <form id = "form_container" action="stud_process.php" method="POST">
            <div class = "container">
                <div class="field-container">
                    <input type="text" name="id" placeholder="Enter Student ID" id="id"/>
                </div>

                <div class="field-container">
                    <input type="text" name="lastName" placeholder="Enter Last Name" id="lastName"/>
                </div>

                <div class="field-container">
                    <input type="text" name="firstName" placeholder="Enter First Name" id="firstName"/>
                </div>

                <div class="field-container">
                    <input type="text" name="middleName" placeholder="Enter Middle Name" id="middleName"/>
                </div>

                <div class="field-container">
                    <input type="text" name="num" placeholder="Enter Contact Number" id="num"/>
                </div>

                <div class="field-container">
                    <input type="text" name="email" placeholder="Enter Email Address" id="email"/>
                </div>

                <div class="button-container">
                    <button id="register" class="btn">REGISTER NOW</button>
                </div>   
            </div>
        </form> 
    </div>     
</body>
</html>