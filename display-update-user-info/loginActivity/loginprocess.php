<?php
session_start();
include("config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = mysqli_real_escape_string($con, $_POST['un']);
    $password = mysqli_real_escape_string($con, $_POST['psw']);

    $query = "SELECT * FROM student_table WHERE Username='$username' AND Password='$password'";
    $result = mysqli_query($con, $query);

    $fetch = mysqli_fetch_array($result);

    if ($result && mysqli_num_rows($result) == 1) {
        $_SESSION['studId'] = $fetch['Student_ID'];
        header("location: index.php");
        exit;
    } else {
        header("location: login.php?err=1");
        exit;
    }
}
?>
