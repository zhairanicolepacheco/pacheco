<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="loginStyle.css">
    <title>Login Page</title>
</head>

<body>
    <div class = "login">
        <div class = "menuBar">
            <img class = "logo" src="loge_new.png" alt="logo">
        </div>

        <div class = "center">
            <form action="loginprocess.php" method="POST">
                <div class = "container">
                    <h3 id = "withAcc">Sign in with your Account</h3>
                    <div class="field-container" id="username">
                        <input type="text" name="un" placeholder="Username" id="un"/>
                    </div>

                    <div class="field-container" id="password">
                        <input type="password" name="psw" placeholder="Password" id="psw"/>
                    </div>

                    <div class="checkBox">
                        <input type="checkbox" id="show"><p>Show Password</p>
                    </div>

                    <div class="button-container">
                        <button id="login" class="btn">LOG IN</button>
                    </div>   
                </div>

                <?php 
                if(isset($_REQUEST["err"]))
                    $msg="*Invalid username or Password";
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
    </div>

    <div class = "signUp">
        <div class = "center2">
            <div class = "container2">
                <img class = "rc" src="deus22.png" alt="logo">
                <h3 id = "noAcc">No Account? Create one.</h3>
                <a href="http://localhost/loginActivity/regform.php">SIGN UP</a>
            </div>    
        </div>
    </div>

    <script src="loginScript.js"> </script>	
</body>
</html>