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
	<link rel="stylesheet" href="indexStyle.css">
	<title>User Profile</title>
</head>

<body>

	<div id = "top-nav-bar">
		<div  id = "logo-part">
			<img class = "logo" src="loge_new.png" alt="logo">
		</div>

	 	<div  id = "option-part">
			<div id = "hyperLinks">
				<a id = "homeLink" href=" ">
					<h3>HOME</h3>
				<a id = "userLink" href="index.php">
					<h3>USER PROFILE</h3>	
				<a id = "logoutLink" href="logout.php">
					<h3>LOGOUT</h3>
				</a>
			</div>
		</div>
	</div>

	<?php
		$sql = "Select * from student_table where Student_ID = '$_SESSION[studId]'";
		$run = mysqli_query($con, $sql);

		$fetch = mysqli_fetch_array($run);
		$_SESSION['studId'] = $fetch['Student_ID'];
		
		$un = $fetch['Username'];
		$studid = $fetch['Student_ID'];
		$lastName = $fetch['Last_Name'];
		$firstName = $fetch['First_Name'];
		$middleName = $fetch['Middle_Name'];
		$age = $fetch['Age'];
		$bday = $fetch['Birthday'];
		$religion = $fetch['Religion'];
		$address = $fetch['Address'];
		$num = $fetch['Contact_No'];
		$email = $fetch['Email_Address'];
			
	?>

	<div  id = "bottom-page">
		<div  id = "left-part">
			<img class = "userIcon" src="user.png" alt="user">
			<h1>Username</h1>
				<p><?php
				echo "@$un";
				?></p>
		</div>

		<div  id = "right-part">
			<h2>Personal Information</h2>
				<div class = "echoContainer">
					<h4>Student ID </h4><p><?php
					echo $studid;
					?></p>
				</div>
				
				<div class = "echoContainer">
					<h4>Last Name </h4><p><?php
					echo $lastName;
					?></p>	
				</div>

				<div class = "echoContainer">
					<h4>First Name </h4><p><?php
					echo $firstName;
					?></p>	
				</div>

				<div class = "echoContainer">
					<h4>Middle Name </h4><p><?php
					echo $middleName;
					?></p>	
				</div>

				<div class = "echoContainer">
					<h4>Age </h4><p><?php
					echo $age;
					?></p>	
				</div>

				<div class = "echoContainer">
					<h4>Birthday </h4><p><?php
					echo $bday;
					?></p>	
				</div>

				<div class = "echoContainer">
					<h4>Religion </h4><p><?php
					echo $religion;
					?></p>	
				</div>
			<hr>
			<h2>Contact Information</h2>
				<div class = "echoContainer">
					<h4>Contact Number </h4><p><?php
					echo $num;
					?></p>	
				</div>

				<div class = "echoContainer">
					<h4>Email Address</h4><p><?php
					echo $email;
					?></p>	
				</div>

				<div class = "echoContainer">
					<h4>Address </h4><p><?php
					echo $address;
					?></p>	
				</div>

			<div id = "btnBox">
				<button id = "btn"><img class = "editIcon" src="editInfo.png" alt="edit"><a id = "editLink" href="editInfo.php">EDIT</a></button>
			</div>
		</div>
	</div>

</body>
</html>