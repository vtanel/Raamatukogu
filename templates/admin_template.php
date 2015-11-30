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
    <script type="text/javascript">
        <!--
        function toggle_visibility(id) {
            var e = document.getElementById(id);
            if (e.style.display == 'block')
                e.style.display = 'none';
            else
                e.style.display = 'block';
        }
        //-->
    </script>
</head>

<body>

<h1>
    Tere <?= $name['admin_fname'], ' ' . $name['admin_lname'] ?>
    <img width="100" height="100" src="admin_images/<?php echo $_SESSION['username']; ?>.gif"/>
</h1>

<!---Too kalender admin_page.php lehel !------->

<a class="log_out" href="#" onclick="toggle_visibility('calender');">Kuva kalender.</a>

<div id="calender" style="display:none;"><?php require 'calendar.php'; ?></div>

<?php require 'calendar/calendar.php'; ?>

<div id="log_out" class="log_out"><a href="controllers/log_out.php">Logi Välja!</a></div>
<br>
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