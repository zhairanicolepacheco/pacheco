<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <title>Document</title>
    </head>

    <body>
		<div class="box-container">
			
			<div class="header-container">
				<h1>REGISTRATION FORM</h1>
			</div>
			
			<form id="login-container" action="registered.php" method="POST">
				<div class="field-container" id="studNum">
					<label for="input">Student Number: </label>
					<input type="text" name="studId" placeholder="STUDENT NUMBER" id="studId"/>
				</div>

				<div class="field-container" id="name">
					<label for="input">Full Name: </label>
					<input type="text" name="fullName" placeholder="FULL NAME" id="fullName"/>
				</div>

				<div class="field-container" id="username">
					<label for="input">Preferred Username: </label>
					<input type="text" name="un" placeholder="PREFERRED USERNAME" id="un"/>
				</div>

				<div class="field-container" id="birthdate">
					<label for="input">Confirm Your Birthday: </label>
					<input type="date" name="bday" id="bday"/>
				</div>
				
				<div class="field-container" id="password">
					<label for="input">Password: </label>
					<input type="password" name="psw" placeholder="PASSWORD" id="psw"/>
				</div>

				<div class="field-container" id="confirmPsw">
					<label for="input">Confirm Password: </label>
					<input type="password" name="psw2" placeholder="CONFIRM PASSWORD" id="psw2"/>
				</div>

				<div class="checkBox">
					<input type="checkbox" id="show">Show Password
				</div>

				<div class="button-container">
					<button id="cancel" class="btn">CANCEL</button>
					<button id="login" class="btn">SIGN UP</button>
				</div>

			</form>	
		</div>
		
		<script src="script.js"> </script>
		
    </body>
</html>