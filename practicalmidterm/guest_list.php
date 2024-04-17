<?php 
include("config.php");
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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="homepage.css">
    <title>Guest List</title>
</head>
<body>
    <div id = "nav_bar">
        <button id="home" class="btn">
            <img src = "home.png" alt = "home-icon" class = "menu-button">
            <a class = "button" href="http://localhost/practicalmidterm/homepage.php">HOMEPAGE</a>
        </button>

        <button id="staff" class="btn">
            <img src = "staff.png" alt = "staff-icon" class = "menu-button">
            <a class = "button" href="http://localhost/practicalmidterm/staff_list.php">STAFF LIST</a>
        </button>

        <button id="stud" class="btn">
            <img src = "stud.png" alt = "student-icon" class = "menu-button">
            <a class = "button" href="http://localhost/practicalmidterm/student_list.php">STUDENT LIST</a>
        </button>

        <button id="guest" class="btn">
            <img src = "guest.png" alt = "guest-icon" class = "menu-button">
            <a class = "button" href="http://localhost/practicalmidterm/guest_list.php">GUEST LIST</a>
        </button>
    </div>

    <?php
		$sql = "select * from guest";
		$run = mysqli_query($mysqli, $sql);

		$fetch = mysqli_fetch_array($run);
		
		$lastName = $fetch['last_name'];
		$firstName = $fetch['first_name'];
		$middleName = $fetch['middle_name'];
		$num = $fetch['contact_num'];
		$email = $fetch['email_add'];
			
	?>

    <div id = "container">
        <div id = "table_container">
            <table>
            <tr>
                <th>Last Name</th>
                <th>First Name Name</th>
                <th>Middle Name</th>
            </tr>
            <tr>
                <td><?php
					echo $lastName;
					?></td>
                <td><?php
					echo $firstName;
					?></td>
                <td><?php
					echo $middleName;
					?></td>
            </tr>
            
            </table>
        </div>    
    </div>
</body>
</html>