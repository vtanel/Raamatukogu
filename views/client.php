<?php require 'controllers/client.php'; ?>

<table class="search-table">
    <tbody>
        <td colspan="2">Laenutaja andmed</td>
        <tr>
            <td>Eesnimi</td>
            <td><?=$isik['fname']?></td>
        </tr>
        <tr>
            <td>Perekonnanimi</td>
            <td><?=$isik['lname']?></td>
        </tr>
        <tr>
            <td>Isikukood</td>
            <td><?=$isik['pcode']?></td>
        </tr>
        <tr>
            <td>Tel.</td>
            <td><?=$isik['phone']?></td>
        </tr>
        <tr>
            <td>E-mail</td>
            <td><?=$isik['email']?></td>
        </tr>
        <tr>
            <td>Hetkel laenus</td>
            <td><?=$isik['current_rent_count']?></td>
        </tr>
        <tr>
            <td>Kogu laenutus</td>
            <td><?=$isik['total_rent_count']?></td>
        </tr>
    </tbody>
</table>