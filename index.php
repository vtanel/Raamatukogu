<?php
//connect database.php


// Set page

$page = !empty($_GET['page']) ? $_GET['page'] : 'index';


// Include controller, if it exists
if (file_exists("controllers/$page.php")) {
    require "controllers/$page.php";
}


// Include template
require "templates/admin_template.php";
