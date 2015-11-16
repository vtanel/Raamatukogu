<?php
session_start();

require 'controllers/admins.php';

?>

<!doctype html>
<html lang="et">
<head>
    <title>Raamatukogu</title>
    <meta charset="UTF-8">
    <style>
        .search_user {
            border: 1px solid;
            width: 390px;
            height: 60px;
        }
        .navbar, ul, li {
            list-style-type: none;
            display: inline-block;
            float: left;
        }

        .navnupp {
            width: 120px;
            height: 40px;
            border: 1px solid;
            float: left;
            display: inline-block;
        }

        .log_out {
            float: right;
        }
    </style>
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

<h1>Tere <?= $name['admin_fname']?> <?= $name['admin_lname']?></h1>

<div class="navbar">
    <ul>
        <li><a href="#" onclick="toggle_visibility('insert_client');">
                <div class="navnupp"><span>Kasutaja registeerimine</span></div>
            </a></li>

        <br>

        <li><a href="#" onclick="toggle_visibility('insert_book');">
                <div class="navnupp"><span>Sisesta raamat</span></div>
            </a></li>

        <br>

        <li><a href="#" onclick="toggle_visibility('search_user');">
                <div class="navnupp"><span>Otsi kasutajat</span></div>
            </a></li>

        <br>

        <li><a href="#" onclick="toggle_visibility('search_book');">
                <div class="navnupp"><span>Otsi raamatut</span></div>
            </a></li>

        <br>

    </ul>

</div>

    <a href="login.php">
        <div class="log_out">Logi välja</div>
    </a>

<div id="insert_client">
    <h1><b>Laenutaja registreerimine</b></h1>

    <form action="" method="POST">

        <table>
            <tr>
                <td>Eesnimi:</td>
                <td><input type="text" max="" name="fname"></td>
            </tr>
            <tr>
                <td>Perekonnanimi:</td>
                <td><input type="text" name="lname"></td>
            </tr>
            <tr>
                <td>Isikukood:</td>
                <td><input type="number" name="p_code"></td>
            </tr>
            <tr>
                <td>Mobiil:</td>
                <td><input type="number" name="mobile"></td>
            </tr>
            <tr>
                <td>Email:</td>
                <td><input type="text" name="e_mail"></td>
            </tr>
            <tr>
                <td><input type="submit" value="Salvesta"></td>
            </tr>


        </table>
    </form>
</div>
<div id="insert_book">


    <h1><b>Raamatu sisestamine</b></h1>

    <form action="" method="POST">

        <table>
            <tr>
                <td>Pealkiri:</td>
                <td><input type="text" name="title"></td>
            </tr>
            <tr>
                <td>Autor:</td>
                <td><input type="text" name="author"></td>
            </tr>
            <tr>
                <td>Tüüp:</td>
                <td><input type="text" name="type"></td>
            </tr>
            <tr>
                <td>Kogus:</td>
                <td><input type="number" name="quantity"></td>
            </tr>
            <tr>
                <td><input type="submit" name="Salvesta"></td>
            </tr>
        </table>
    </form>
</div>
<div id="search_user">


    <h1><b>Kasutajad</b></h1>

    <div class="search_user">

        <form method="post">
            <input type="search" name="search" placeholder="Otsi kasutajat..."/>
            <input type="submit" name="submit" value="Otsi"/>
        </form>

        <table border="1px">

            <thead>
            <td>ID</td>
            <td>EESNIMI</td>
            <td>PEREKONNANIMI</td>
            <td>HETKEL LAENUS</td>
            </thead>

        </table>

    </div>
</div>
<div id="search_book">


    <h1><b>Raamatud</b></h1>

    <div class="search_book">
        <form method="post">
            <input type="search" name="search" placeholder="Otsi raamatut..."/>
            <input type="submit" name="submit" value="Otsi"/>
        </form>
        <table border="1px">
            <thead>
            <td>ID</td>
            <td>PEALKIRI</td>
            <td>AUTOR</td>
            <td>ZANR</td>
            <td>KOGUS</td>
            </thead>
        </table>
    </div>
</div>
</body>
</html>
