<?php
//connect to database
require 'connect.php';

// Set page

$page = !empty($_GET['page']) ? $_GET['page'] : 'error';


// Include template
require "templates/admin_template.php";

