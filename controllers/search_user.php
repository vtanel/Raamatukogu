<?php

$con = mysqli_connect(DATABASE_HOSTNAME, DATABASE_USERNAME, DATABASE_PASSWORD, DATABASE_DATABASE) or die(mysqli_error($con));
mysqli_query($con, "SET NAMES 'utf8'");

if (isset($_POST['submit'])) {

    $keyword = $_POST['search'];
    $found_clients = mysqli_query($con, "
            SELECT * FROM client
            WHERE
            client_ID LIKE('%$keyword%') OR
            fname LIKE('%$keyword%') OR
            lname LIKE('%$keyword%') OR
            p_code LIKE('%$keyword%') OR
            mobile LIKE('%$keyword%') OR
            mail LIKE('%$keyword%') OR
            blacklist LIKE('%$keyword%') OR
            total_rent LIKE('%$keyword%')
            ");

    while($client = MySQLi_fetch_array($found_clients)) {

        echo '<tr>';
        echo '<td id="ID">'.$client['client_ID'].'</td>';
        echo '<td id="fname">'.$client['fname'].'</td>';
        echo '<td id="lname">'.$client['lname'].'</td>';
        echo '<td id="p_code">'.$client['p_code'].'</td>';
        echo '<td id="mobile">'.$client['mobile'].'</td>';
        echo '<td id="mail">'.$client['mail'].'</td>';
        echo '<td id="blacklist">'.$client['blacklist'].'</td>';
        echo '<td id="total_rent">'.$client['total_rent'].'</td>';
        echo '</tr>';

    }
}