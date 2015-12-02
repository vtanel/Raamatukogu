<?php require 'controllers/client.php'; ?>

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
        <td><?= $isik['current_rent_count'] ?></td>
    </tr>
    <tr>
        <td>Kogu laenutus</td>
        <td><?= $isik['total_rent_count'] ?></td>
    </tr>
    </tbody>
</table>

<table id="right" class="search-table">
    <tbody>
    <td>Pealkiri</td>
    <td>Autor</td>
    <td>Kuupäevad</td>
    <tr>
        <td>1</td>
        <td>1</td>
        <td>1</td>
    </tr>
    <tr>
        <td>1</td>
        <td>1</td>
        <td>1</td>
    </tr>
    </tbody>
</table>

<table id="down" class="search-table">
    <tbody>
    <td>Autor</td>
    <td>Pealkiri</td>
    <td>Zanr</td>
    <td>Lisa</td>
    <td>Laenuta</td>
    <tr>
        <td>1</td>
        <td>1</td>
        <td>1</td>
        <td>1</td>
        <td>1</td>
    </tr>
    <tr>
        <td>1</td>
        <td>1</td>
        <td>1</td>
        <td>1</td>
        <td>1</td>
    </tr>
    </tbody>
</table>