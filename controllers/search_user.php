<?php



if (isset($_POST['submit'])) {
    $keyword = $_POST['search'];
    if($keyword==""){
        echo "Sisestage otsitav.";
    }else{
        $found_clients = mysqli_query($db,"
                SELECT clients.client_id,clients.fname, clients.lname,clients.pcode
                FROM clients
                WHERE
                clients.client_id LIKE('%$keyword%') OR
                clients.fname LIKE('%$keyword%') OR
                clients.pcode LIKE('%$keyword%') OR
                clients.lname LIKE('%$keyword%')
                ");


        while ($client = MySQLi_fetch_array($found_clients)) {
            echo '<tr>';
            echo '<td >' . $client['client_id'] . '</td>';
            echo '<td ><a href="?page=client&id='. $client['client_id'] .'"> ' . $client['fname'] . '</a></td>';
            echo '<td >' . $client['lname'] . '</td>';
            echo '<td >' . $client['pcode'] . '</td>';
            echo '</tr>';


        }
    }
}