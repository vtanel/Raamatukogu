<?php require 'controllers/book.php'; ?>

<table class="search-table">
    <tbody>
    <td colspan="2">Raamatu andmed</td>
    <tr>
        <td>Autor</td>
        <td><?= $raamat['author_name'] ?></td>
    </tr>
    <tr>
        <td>Zanr</td>
        <td><?= $raamat['genre_name'] ?></td>
    </tr>
    <tr>
        <td>Pealkiri</td>
        <td><?= $raamat['book_title'] ?></td>
    </tr>
    <tr>
        <td>Kogus</td>
        <td><?= $raamat['book_quantiy'] ?></td>
    </tr>
    </tbody>
</table>

<form action="" method="POST">
    <table class="search-table">
        <tbody>
        <td colspan="2">Muuda andmeid</td>
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
            <td><input type="text" name="genre"></td>
        </tr>
        <tr>
            <td>Kogus:</td>
            <td><input type="number" name="quantity"></td>
        </tr>
        <tr>
            <td><input type="submit" value="Muuda andmeid" name="changebook"></td>
        </tr>
        </tbody>
    </table>
</form>