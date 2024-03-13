<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>

    <body>
		<div class="box-container">
			
			<div class="header-container">
				<h1>REGISTRATION FORM</h1>
			</div>
			
			<form id="login-container" action="form.php" method="POST">
                <div class="field-container" id="studentId">
					<label for="input">Student ID: </label>
					<input type="text" name="studId" placeholder="STUDENT ID" id="studId"/>
				</div>

				<div class="field-container" id="l_name">
					<label for="input">Last Name: </label>
					<input type="text" name="lastName" placeholder="LAST NAME" id="lastName"/>
				</div>

                <div class="field-container" id="f_name">
					<label for="input">First Name: </label>
					<input type="text" name="firstName" placeholder="FIRST NAME" id="firstName"/>
				</div>

                <div class="field-container" id="m_name">
					<label for="input">Middle Name: </label>
					<input type="text" name="middleName" placeholder="MIDDLE NAME" id="middleName"/>
				</div>

                <div class="field-container" id="ages">
					<label for="input">Age: </label>
					<input type="text" name="age" placeholder="AGE" id="age"/>
				</div>

				<div class="field-container" id="birthdate">
					<label for="input">Birthday: </label>
					<input type="date" name="bday" id="bday"/>
				</div>
				
				<div class="field-container" id="rel">
					<label for="input">Religion: </label>
					<input type="text" name="religion" placeholder="RELIGION" id="religion"/>
				</div>

				<div class="field-container" id="address">
					<label for="input">Address: </label>
					<input type="text" name="add" placeholder="ADDRESS" id="add"/>
				</div>

                <div class="field-container" id="phoneNum">
					<label for="input">Contact No.: </label>
					<input type="text" name="contact" placeholder="CONTACT NO" id="contact"/>
				</div>

                <div class="field-container" id="emailAdd">
					<label for="input">Email Address: </label>
					<input type="email" name="email" placeholder="EMAIL ADDRESS" id="email"/>
				</div>
			

				<div class="button-container">
					<button id="cancel" class="btn">CANCEL</button>
					<button id="login" class="btn">SIGN UP</button>
				</div>

			</form>	
		</div>
			
    </body>
</html>