<?php
//connect to database
require 'connect.php';


// Set page

$page = !empty($_GET['page']) ? $_GET['page'] : 'insert_user';


// Include template
require "templates/admin_template.php";