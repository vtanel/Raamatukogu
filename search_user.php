<!doctype html>
<html lang="et">
<head>
    <meta charset="UTF-8">

    <style>

        .search_user {
            border: 1px solid;
            width: 390px;
            height: 60px;
        }

    </style>

</head>

<body>

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

<br>
<a href="admin_page.php" class="href">ESILEHELE</a>

</body>
</html>