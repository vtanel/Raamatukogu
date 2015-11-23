
<h1><b>Raamatu sisestamine</b></h1>

<form action="" method="POST">

    <table class="insert-table">
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
            <td><input type="submit" value='Sisesta' name="insertbook"></td>
        </tr>
    </table>
</form>

<?php
require_once('controllers/insert_book.php');
?>