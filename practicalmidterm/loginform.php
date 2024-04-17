<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="loginform_style.css">
    <title>Login Page</title>
</head>
<body>
    <div class = "login">
        <h2>LOGIN</h2>
        <h3>Sign in with your Account</h3>
        <form id = "form_container" action="loginprocess.php" method="POST">
            <div class = "container">
                <div class="field-container" id="username">
                    <input type="text" name="un" placeholder="Username" id="un"/>
                </div>

                <div class="field-container" id="password">
                    <input type="password" name="psw" placeholder="Password" id="psw"/>
                </div>

                <div class="button-container">
                    <button id="login" class="btn">LOG IN</button>
                </div>   
            </div>

                <?php 
                if(isset($_REQUEST["err"]))
                    $msg="Invalid username or Password";
                ?>

                <p style="color:red;">
                    <?php if(isset($msg))
                    {
                        echo $msg;
                    }
                    ?>
                </p>
        </form> 
    </div>    
</body>
</html>