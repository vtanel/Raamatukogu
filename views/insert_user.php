
<h1><b>Laenutaja registreerimine</b></h1>

<form action="" method="POST">

    <table class="insert-table">
        <tr>
            <td>Eesnimi:</td>
            <td><input type="text" max="" name="fname"></td>
        </tr>
        <tr>
            <td>Perekonnanimi:</td>
            <td><input type="text" name="lname"></td>
        </tr>
        <tr>
            <td>Isikukood:</td>
            <td><input type="number" name="p_code"></td>
        </tr>
        <tr>
            <td>Mobiil:</td>
            <td><input type="number" name="mobile"></td>
        </tr>
        <tr>
            <td>Email:</td>
            <td><input type="text" name="e_mail"></td>
        </tr>
        <tr>
            <td><input type="submit" name='insertuser' value="Salvesta"></td>
        </tr>


    </table>
</form>

<?php
require_once('controllers/insert_user.php');
?>