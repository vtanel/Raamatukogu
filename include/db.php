<?php
$db = mysqli_connect("127.0.0.1", "root", "", "ramps");
mysqli_query($db, "SET NAMES 'utf8'");
if ($db === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
};