<?php

//connect to database
require 'connect.php';

$user = $_SESSION['username'];
// select admin_fname, admin_lname from database
$sql = mysqli_query($con, "Select admin_fname, admin_lname
    FROM admins WHERE admin_username = '$user'"
    );

$name = mysqli_fetch_assoc($sql);




