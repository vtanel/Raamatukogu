<?php
//connect to database
require 'include/db.php';


// Set page

$page = !empty($_GET['page']) ? $_GET['page'] : 'index';


// Include template
require "templates/admin_template.php";
