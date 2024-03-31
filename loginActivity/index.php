<?php 
session_start();
if(!isset($_SESSION["login"])) {
    header("location: login.php"); 
    exit; 
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
</head>

<style>
	

* {
	box-sizing: border-box;
	font-family: sans-serif;
}

body {
	background-color: #d9d9d9;
	margin: 0;
}

.nav-bar {
	background-color: #18206a;
	width: 100vw;
	height: 3.5vw;
	display: flex; 
	justify-content: start;
}

.menu-bar {
	width: 3.5vw;
	height: 3.5vw;
	position: relative;
	display: inline-block;
	text-align: center;
	margin-right: 2vw;
}

.menu-btn {
	border: none;
	background-color: #d9d9d9;
	width: 3.5vw;
	height: 3.5vw;
}

img.menu-icon {
	width: 2vw;
	height: 2vw;
}

.menu-box-hidden {
	display: none;
    position: absolute;
	background-color: white;
	min-width: 18vw;
	box-shadow: 0 .5vw .5vw 0 rgba(0,0,0,0.2);
	z-index: 1;
}

.menu-box-hidden a{
	color: black;
	padding: 1vw;
	text-decoration: none;
	display: block;	
}

.menu-box-hidden a:hover {
	background-color: #d9d9d9;
}

.menu-bar:hover .menu-box-hidden {
	display:block;
	left: 0vw;
}

.menu-bar:hover .menu-btn {
	background-color: white;
}

.button {
	color: black;
	background-color: #f3f3f3;
	border: none;
	font-size: 1.5vw;
}

img.menu-button {
	width: 1.5vw;
	height: 1.5vw;
}

/* content */

.semi-body {
	display: grid;
    align-items: center;
    justify-content: center;
}

.header-box {
	display: grid;
    justify-content: start;
	padding-top: 2vw;
	padding-bottom: 2vw;
}

h1 {
	font-size: 3vw;
	padding: 0;
	margin: 0;
	font-weight: 100;
}

.paragraph {
	font-size: 1.5vw;
	padding: 0;
	margin: 0;
	width: 60vw;
	padding-top: 1vw;
}

hr {
	display: inline-block;
	border-top: .15vw solid black;
	width: 90vw;
}

.link-box {
	background-color: none;
	width: 90vw;
	height: 20vw;
	padding: 3vw;
	padding-bottom: 3vw;
	display: flex;
	flex-wrap: wrap;
	align-items: center;
    justify-content: center;
    gap: 2vw;
	margin-top: 1vw;
	margin-bottom: 2vw;
}

img.home-button {
	width: 1.7vw;
	height: 1.7vw;
}

.buttons {
	background-color: white;
	border: none;
	width: 25vw;
	padding: 1.5vw;
	box-shadow: 0 .5vw .5vw 0 rgba(0,0,0,0.2);
}

.buttons:hover {
	background-color: #f3f3f3;
	width: 28vw;
	padding: 2vw;
	font-size: 2vw;
}

.field-box a{
	display: flex;
    align-items: center;
    justify-content: space-around;
	text-decoration: none;
}

.field-box a {
	font-size: 1.5vw;
}

.emergency h3{
	font-size: 2.5vw; 
	font-weight: 100;
	margin: 0;
	margin-top: 1vw;
	padding: 0;
}

.emergency{
	display: grid;
}

#hospitals {
	font-size: 1.3vw;
	margin-left: 2vw;
}

#logout {
    display: flex;
    justify-content: space-between;
    padding: 0;
    margin: 0;
	width: 90vw;
}

#logoutLink {
	display: flex;
	font-size: 0.7vw;
	color: black;
	padding: 1vw;
    margin: 0;
	background-color: white;
}

</style>    

<body>
		<div class = "nav-bar">
			<div class = "menu-bar">
				<button class = "menu-btn">
					<img src = "menu.png" alt = "Menu" class = "menu-icon">
				</button>
				<div class = "menu-box-hidden">
					<a href="homepage.html" class="button" id = "home">Homepage
						<img src = "home.png" alt = "homepage-icon" class = "menu-button">
					</a>							
					<a href="page2.html" class="button" id = "profile">Student Profile
						<img src = "student.png" alt = "student-icon" class = "menu-button">
					</a>						
					<a href="page3.html" class="button" id = "record">Record of Visit
						<img src = "record.png" alt = "record-icon" class = "menu-button">
					</a>						
					<a href="page4.html" class="button" id = "report">Monthly Report
						<img src = "report.png" alt = "report-icon" class = "menu-button">
					</a>
					<a href="page5.html" class="button" id = "healthcondition">Health Condition
						<img src = "condition.png" alt = "condition-icon" class = "menu-button">
					</a>
					<a href="page6.html" class="button" id = "medicine">Medicine
						<img src = "medicine.png" alt = "medicine-icon" class = "menu-button">
					</a>
				</div>	
			</div>

			<div id = "logout">
				<img src = "loge_new.png" alt = "logo" id = "logo">	
				<a id = "logoutLink" href="logout.php">
					<img src = "profile.png" alt = "user-icon" class = "menu-button">
					<h2>Logout</h2>
				</a>
			</div>
		</div>
						
		<div class = "semi-body">
			<div class = "header-box">
				<h1>Avignone Clinic</h1>
				<div class = "paragraph">
					<p>The Avignone Clinic is a state of the art medical center committed to offering comprehensive and tailored healthcare solutions.
					 The clinic combines innovative medical technologies with a team of qualified specialists to provide top-notch diagnostic, 
					 therapeutic, and preventive treatments with an emphasis on patient well-being. Avignone Clinic is committed to quality 
					 in healthcare delivery, whether it is resolving urgent health difficulties or supporting long-term wellness.</p>
				</div>
			</div>
			
			<hr>
			<div class="link-box">
					<div class="field-box" id = "home-page">
						<a href="homepage.html" class="buttons" id = "home2">Homepage
							<img src = "home.png" alt = "homepage-icon" class = "home-button">
						</a>							
					</div>
							
					<div class="field-box" id = "student-profile">
						<a href="page2.html" class="buttons" id = "profile2">Student Profile
							<img src = "student.png" alt = "student-icon" class = "home-button">
						</a>							
					</div>
					
					<div class="field-box" id = "visit-record">
						<a href="page3.html" class="buttons" id = "record2">Record of Visit
							<img src = "record.png" alt = "record-icon" class = "home-button">
						</a>						
					</div>
											
					<div class="field-box" id = "report">
						<a href="page4.html" class="buttons" id = "report2">Monthly Report
							<img src = "report.png" alt = "report-icon" class = "home-button">
						</a>
					</div>
					
					<div class="field-box" id = "condition">
						<a href="page5.html" class="buttons" id = "healthcondition2">Health Condition
							<img src = "condition.png" alt = "condition-icon" class = "home-button">
						</a>	
					</div>
											
					<div class="field-box" id = "med">
						<a href="page6.html" class="buttons" id = "medicine2">Medicine
							<img src = "medicine.png" alt = "medicine-icon" class = "home-button">
						</a>
					</div>
			</div>
			<hr>
			
			<div class = "emergency">
				<h3>For Emergencies:</h3>
				<p id = "hospitals">
						In Tagaytay, Philippines, near Rogationist College, here is information about emergency numbers and hospitals:
				<br>
				<br>	1. Tagaytay Medical Center:
				<br>	   - Location: E. Aguinaldo Highway, Maharlika East, Tagaytay City, Cavite
				<br>	   - Contact Number: +63 (46) 483-4111
				<br>	   - opening hours : monday to sunday
				<br>	2. Tagaytay City Hospital:
				<br>	   - Location: Tagaytay-Calamba Road, Sungay West, Tagaytay City, Cavite
				<br>	   - Contact Number: +63 (46) 413-1333
				<br>	   -opening hours : monday to sunday
				<br>	
				<br>	In Silang, Cavite, Philippines, near Rogationist College, here is information about emergency numbers and hospitals:
				<br>
				<br>	3. Silang Specialist Medical Center:
				<br>	   - Location: E. Aguinaldo Highway, Silang, Cavite (near the Silang Municipal Hall)
				<br>	   - Contact Number: +63 (46) 523-8888
				<br>	   - opening hours : monday to sunday
				<br>
				<br>	4. Velazco Hospital and Dialysis Clinic:
				<br>	   - Location: Emilio Silang, Cavite
				<br>	   - Contact Number: +046 4140280
				<br>	   - opening hours : monday to saturday
				</p>
			</div>
		</div>
</body>
</html>
