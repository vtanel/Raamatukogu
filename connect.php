<?php
require 'config.php';
// Connect to database.

$con = mysqli_connect(DATABASE_HOSTNAME, DATABASE_USERNAME, DATABASE_PASSWORD, DATABASE_DATABASE) or die(mysqli_error($con));
mysqli_query($con, "SET NAMES 'utf8'");