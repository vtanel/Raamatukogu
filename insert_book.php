<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Uue raamatu lisamine</title>
</head>
<body>

<h1><b>Raamatu sisestamine</b></h1>

<form action="" method="POST" >

    <table>
        <tr>
            <td>Pealkiri: </td>
            <td><input type="text" name="title"></td>
        </tr>
        <tr>
            <td>Autor: </td>
            <td><input type="text" name="author"></td>
        </tr>
        <tr>
            <td>Tüüp: </td>
            <td><input type="text" name="type"></td>
        </tr>
        <tr>
            <td>Kogus: </td>
            <td><input type="number" name="quantity"></td>
        </tr>
        <tr>
            <td><input type="submit" name="Salvesta"> </td>
        </tr>
    </table>
</form>

<br>
<a href="admin_page.php" class="href">ESILEHELE</a>

</body>
</html>


<?php
require_once('controllers/books.php');
?>


