<h1 style="display: none;"><?php require_once 'controllers/client.php'; ?></h1>

<table id="left" class="search-table">
    <tbody>
    <td colspan="2">Laenutaja andmed</td>
    <tr>
        <td>Eesnimi</td>
        <td><?= $isik['fname'] ?></td>
    </tr>
    <tr>
        <td>Perekonnanimi</td>
        <td><?= $isik['lname'] ?></td>
    </tr>
    <tr>
        <td>Isikukood</td>
        <td><?= $isik['pcode'] ?></td>
    </tr>
    <tr>
        <td>Tel.</td>
        <td><?= $isik['phone'] ?></td>
    </tr>
    <tr>
        <td>E-mail</td>
        <td><?= $isik['email'] ?></td>
    </tr>
    <tr>
        <td>Hetkel laenus</td>
        <td>
            <table id="left" class="search-table">
                <tr>
                    <?php require "controllers/client3.php"; ?>
                </tr>
            </table>
            <?= $isik['current_rent_count'] ?>
            <br>

            <form method="post">
                <input type="submit" name="rented" value="Kuva hetkel laenus raamatud">
            </form>
        </td>
    </tr>
    <tr>
        <td>Kogu laenutus</td>
        <td><?= $isik['total_rent_count'] ?></td>
    </tr>
    </tbody>
</table>

<div id="down">
    <form method="post">
        <input type="search" name="search" placeholder="Otsi raamatut..."/>
        <input type="submit" name="submit" value="Otsi"/>
    </form>
    <br>
    <table class="search-table">
        <tbody>

        <td>Autor</td>
        <td>Pealkiri</td>
        <td>Zanr</td>
        <td>Kogus</td>
        <td>Laenuta</td>

        <?php require "controllers/client2.php"; ?>

        </tbody>
    </table>
</div>