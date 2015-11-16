<?php
// Connect to database.
$con = mysqli_connect("localhost", "root", "", "raamatukogu");

mysqli_query($con, "SET NAMES 'utf8'");

if ($con === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

