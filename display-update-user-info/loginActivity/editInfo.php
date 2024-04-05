<?php 
session_start();
include("config.php");
if(!isset($_SESSION["studId"])) {
    header("location: login.php");  
} else 
?>

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
			
			<form id="login-container" action="editForm.php" method="POST">
				<div class="displayFlex">
					<div class = "wrap">
						<div class="field-container" id="studentId">
							<label for="input">Student ID:</label>
							<p>
                            <?php 
                            $sql = "Select * from student_table where Student_ID = '$_SESSION[studId]'";
                            $run = mysqli_query($con, $sql);
                            $fetch = mysqli_fetch_array($run);
                            $studid = $fetch['Student_ID'];
                            echo $studid;
                            ?>
                            </p>
						</div>
						<div class="field-container" id="f_name">
							<label for="input">First Name:</label>
							<input type="text" name="firstName" placeholder="FIRST NAME" id="firstName"/>
						</div>
						<div class="field-container" id="birthdate">
							<label for="input">Birthday:</label>
							<input type="date" name="bday" id="bday"/>
						</div>
						<div class="field-container" id="rel">
							<label for="input">Religion:</label>
							<input type="text" name="religion" placeholder="RELIGION" id="religion"/>
						</div>
						<div class="field-container" id="emailAdd">
							<label for="input">Email Address:</label>
							<input type="email" name="email" placeholder="EMAIL ADDRESS" id="email"/>
						</div>
					</div>

					<div class = "wrap2">
						<div class="field-container" id="l_name">
							<label for="input">Last Name:</label>
							<input type="text" name="lastName" placeholder="LAST NAME" id="lastName"/>
						</div>
						<div class="field-container" id="m_name">
							<label for="input">Middle Name:</label>
							<input type="text" name="middleName" placeholder="MIDDLE NAME" id="middleName"/>
						</div>
						<div class="field-container" id="ages">
							<label for="input">Age:</label>
							<input type="text" name="age" placeholder="AGE" id="age"/>
						</div>
						<div class="field-container" id="address">
							<label for="input">Address:</label>
							<input type="text" name="add" placeholder="ADDRESS" id="add"/>
						</div>

						<div class="field-container" id="phoneNum">
							<label for="input">Contact No.:</label>
							<input type="text" name="contact" placeholder="09X-XXX-XXXX" id="contact"/>
						</div>
					</div>
				</div>
				<div class="field-container" id="username">
					<label for="input">Preferred Username:</label>
					<input type="text" name="un" placeholder="PREFERRED USERNAME" id="un"/>
				</div>

				<div class="button-container">
					<button id="login" class="btn">SAVE</button>	
				</div>
			</form>	
		</div>
		<script src="script.js"> </script>	
    </body>
</html>