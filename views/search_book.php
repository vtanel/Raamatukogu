



<h1><b>Raamatud</b></h1>

<div class="search_book">
    <form method="post">
        <input type="search" name="search" placeholder="Otsi raamatut..."/>
        <input type="submit" name="submit" value="Otsi"/>
    </form>
    <br>
    <table class="search-table">




        <tbody>

        <td>ID</td>
        <td>PEALKIRI</td>
        <td>AUTOR</td>
        <td>ŽANR</td>
        <td>KOGUS</td>

        <?php

        include "controllers/search_book.php";

        ?>

        </tbody>
    </table>
</div>

<br>
