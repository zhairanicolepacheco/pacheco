<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="style.css">
        <title>Registration Form</title>
    </head>

    <body>
		<div class="box-container">
			
			<div class="header-container">
				<h1>REGISTRATION FORM</h1>
			</div>
			
			<form id="login-container" action="form.php" method="POST">
				<p class = "req" id = "note">* Indicates required question</p>
				<div class="displayFlex">
					<div class = "wrap">
						<div class="field-container" id="studentId">
							<label for="input">Student ID: <span class = "req">  *</span></label>
							<input type="text" name="studId" placeholder="STUDENT ID" id="studId"/>
						</div>
						<div class="field-container" id="f_name">
							<label for="input">First Name: <span class = "req">  *</span></label>
							<input type="text" name="firstName" placeholder="FIRST NAME" id="firstName"/>
						</div>
						<div class="field-container" id="birthdate">
							<label for="input">Birthday: <span class = "req">  *</span></label>
							<input type="date" name="bday" id="bday"/>
						</div>
						<div class="field-container" id="rel">
							<label for="input">Religion: <span class = "req">  *</span></label>
							<input type="text" name="religion" placeholder="RELIGION" id="religion"/>
						</div>
						<div class="field-container" id="emailAdd">
							<label for="input">Email Address: <span class = "req">  *</span></label>
							<input type="email" name="email" placeholder="EMAIL ADDRESS" id="email"/>
						</div>
					</div>

					<div class = "wrap2">
						<div class="field-container" id="l_name">
							<label for="input">Last Name: <span class = "req">  *</span></label>
							<input type="text" name="lastName" placeholder="LAST NAME" id="lastName"/>
						</div>
						<div class="field-container" id="m_name">
							<label for="input">Middle Name: <span class = "req">  *</span></label>
							<input type="text" name="middleName" placeholder="MIDDLE NAME" id="middleName"/>
						</div>
						<div class="field-container" id="ages">
							<label for="input">Age: <span class = "req">  *</span></label>
							<input type="text" name="age" placeholder="AGE" id="age"/>
						</div>
						<div class="field-container" id="address">
							<label for="input">Address: <span class = "req">  *</span></label>
							<input type="text" name="add" placeholder="ADDRESS" id="add"/>
						</div>

						<div class="field-container" id="phoneNum">
							<label for="input">Contact No.: <span class = "req">  *</span></label>
							<input type="text" name="contact" placeholder="09X-XXX-XXXX" id="contact"/>
						</div>
					</div>
				</div>
				<div class="field-container" id="username">
					<label for="input">Preferred Username: <span class = "req">  *</span></label>
					<input type="text" name="un" placeholder="PREFERRED USERNAME" id="un"/>
				</div>

				<div class="field-container" id="password">
					<label for="input">Password: <span class = "req">  *</span></label>
					<input type="password" name="psw" placeholder="PASSWORD" id="psw"/>
				</div>

				<div class="field-container" id="confirmPsw">
					<label for="input">Confirm Password: <span class = "req">  *</span></label>
					<input type="password" name="psw2" placeholder="CONFIRM PASSWORD" id="psw2"/>
				</div>

				<div class="checkBox">
					<input type="checkbox" id="show">Show Password
				</div>

				<div class="button-container">
					<button id="login" class="btn">SIGN UP</button>
					<a href="http://localhost/inputValidation/login.php">Already have an account? LOGIN</a>
				</div>

			</form>	
		</div>
		<script src="script.js"> </script>	
    </body>
</html>