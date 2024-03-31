<?php
session_start();
include("config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = mysqli_real_escape_string($mysqli, $_POST['un']);
    $password = mysqli_real_escape_string($mysqli, $_POST['psw']);

    $query = "SELECT * FROM student_table WHERE Username='$username' AND Password='$password'";
    $result = mysqli_query($mysqli, $query);

    if ($result && mysqli_num_rows($result) == 1) {
        $_SESSION["login"] = true;
        header("location: index.php");
        exit;
    } else {
        header("location: login.php?err=1");
        exit;
    }
}
?>
