<?php

if (!isset($_SESSION['username'])) {
    header("Location: admin_login.php");
}



$user = $_SESSION['username'];
// select admin_fname, admin_lname from database
$sql = mysqli_query($con, "SELECT admin_fname, admin_lname
    FROM admins WHERE admin_username = '$user'"
);

$name = mysqli_fetch_assoc($sql) or die('ERROR');