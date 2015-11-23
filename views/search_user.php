<h1><b>Kasutajad</b></h1>

<div class="search_user">

    <form method="post">
        <input type="search" name="search" placeholder="Otsi kasutajat..."/>
        <input type="submit" name="submit" value="Otsi"/>
    </form>
    <br>
    <table class="search-table">




        <tbody>

        <td>ID</td>
        <td>EESNIMI</td>
        <td>PEREKONNANIMI</td>
        <td>ISIKUKOOD</td>
        <td>MOBIIL</td>
        <td>MAIL</td>
        <td>BLACKLIST</td>
        <td>HETKEL LAENUS</td>

        <?php
        include 'controllers/search_user.php';
        ?>

        </tbody>
    </table>

</div>
