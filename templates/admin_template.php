<?php
session_start();

require 'controllers/admins.php';

?>
<!doctype html>
<html lang="et">
<head>

    <meta charset="UTF-8">
    <title>Document</title>
    <link href="css/admin_template.css" rel="stylesheet" type="text/css">
    <link href="css/searchtable/tables.css" rel="stylesheet" type="text/css">
</head>

<body>
<h1>Tere <?= $name['admin_fname'], ' ' . $name['admin_lname'] ?></h1>

<!---Too kalender admin_page.php lehel !------->
<?php require 'calendar.php'; ?>

<div id="log_out" class="log_out"><a href="controllers/log_out.php">Logi Välja!</a></div>
<br>

<div class="navbar">
    <ul>
        <li><a href="?page=insert_user">
                <div class="navnupp"><span>Laenutaja registreerimine</span></div>
            </a></li>

        <li><a href="?page=insert_book">
                <div class="navnupp"><span>Sisesta raamat</span></div>
            </a></li>

        <li><a href="?page=search_user">
                <div class="navnupp"><span>Otsi kasutajat</span></div>
            </a></li>

        <li><a href="?page=search_book">
                <div class="navnupp"><span>Otsi raamatut</span></div>
            </a></li>

    </ul>

</div>
<div class="body">
    <center>
        <? if (file_exists("views/$page.php")) require "views/$page.php"; else require 'views/error.php' ?>
    </center>
</div>


</body>
</html>