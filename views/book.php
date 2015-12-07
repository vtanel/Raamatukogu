<?php require 'controllers/book.php'; ?>

<form method="post">
<table class="search-table">
    <tbody>
    <td colspan="2">Raamatu andmed</td>
    <tr>
        <td>Autor</td>
        <td><input type="text" name="author_name" value="<?= $raamat['author_name'] ?>"/></td>
    </tr>
    <tr>
        <td>Zanr</td>
        <td><input type="text" name="genre" value="<?= $raamat['genre_name'] ?>"/></td>
    </tr>
    <tr>
        <td>Pealkiri</td>
        <td><input type="text" name="book_title" value="<?= $raamat['book_title'] ?>"/></td>
    </tr>
    <tr>
        <td>Kogus</td>
        <td><input type="text" name="book_quantiy" value="<?= $raamat['book_quantiy'] ?>"/></td>
    </tr>
    <tr>
        <td><input type="submit" value="Muuda andmeid" name="changebook"/></td>
    </tr>
    </tbody>
</table>
</form>