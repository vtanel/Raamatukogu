<!doctype html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <style>
        .search_book {
            border: 1px solid;
            width: 280px;
            height: 60px;
        }
    </style>
</head>

<body>

<h1><b>Raamatud</b></h1>

<div class="search_book">
    <form method="post">
        <input type="search" name="search" placeholder="Otsi raamatut..."/>
        <input type="submit" name="submit" value="Otsi"/>
    </form>
    <br>
    <table class="search-table">
        <thead>
        <td>ID</td>
        <td>PEALKIRI</td>
        <td>AUTOR</td>
        <td>ŽANR</td>
        <td>KOGUS</td>
        </thead>

        <tbody>

        <?php

        require ('controllers/search_book.php')

        ?>

        </tbody>
    </table>
</div>

<br>
<a href="admin_page.php" class="href">ESILEHELE</a>

</body>
</html>