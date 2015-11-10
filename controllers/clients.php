<?php

//connect to database
$db = mysqli_connect("127.0.0.1", "root", "", "raamatukogu");

if ($db === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
};

//insert client form data into database
if (isset($_POST['submit'])) {
    //check if all fields have values
    if (empty($_POST['fname']) or empty($_POST['lname']) or
        empty($_POST['p_code']) or is_int($_POST['p_code']) or
        preg_match('/^\d{11}$/', ($_POST['p_code']))===0 or
        empty($_POST['mobile']) or is_int($_POST['mobile']) or
        empty($_POST['e_mail'])
    ) {
        // show what values are missing
        echo "Klienti ei saanud sisestada. <br><br>Vead:<br> ";
        if (empty($_POST['fname'])) {
            echo "sisesta eesnimi<br>";
        }
        if (empty($_POST['lname'])) {
            echo "sisesta perekonnanimi<br>";
        }
        if (empty($_POST['p_code'])) {
            echo "sisesta isikukood<br>";
        }
        elseif (is_int($_POST['p_code'])) {
                echo "sisesta õige isikukood<br>";
        }
        elseif (!preg_match('/^\d{11}$/', ($_POST['p_code']))) {
                echo "sisesta õige isikukoodi pikkus<br>";
        }
        if (empty($_POST['mobile'])) {
            echo "sisesta mobiil<br>";
        } elseif (is_int($_POST['mobile'])) {
            echo "sisesta õige mobiil<br>";
        }
        if (empty($_POST['e_mail'])) {
            echo "sisesta email<br>";
        }

    } else {
        // insert new client into database
        $sql = "INSERT INTO client (fname, lname, p_code, mobile, mail, blacklist, total_rent)
        VALUES ('$_POST[fname]', '$_POST[lname]', '$_POST[p_code]',
        '$_POST[mobile]', '$_POST[e_mail]', 0, 1)";

        if (mysqli_query($db, $sql)) {
            echo "Klient edukalt sisestatud";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($db);
        }
    }
}

// Close connection
mysqli_close($db);



/*if (is_numeric($_POST['p_code'])) {
    settype($_POST['p_code'], 'integer');
}
if (is_numeric($_POST['mobile'])) {
    settype($_POST['mobile'], 'integer');
}*/


/*if (empty($_POST['fname']) or empty($_POST['lname']) or
    empty($_POST['type']) or empty($_POST['quantity']) or !is_int($_POST['quantity'])
) {
    echo "Raamatut ei saanud sisestada. <br><br>Vead:<br> ";
    if (empty($_POST['title'])) {
        echo "sisesta pealkiri<br>";
    }
    if (empty($_POST['author'])) {
        echo "sisesta autor<br>";
    }
    if (empty($_POST['type'])) {
        echo "sisesta tüüp<br>";
    }
    if (empty($_POST['quantity']) or !is_int($_POST['quantity'])) {
        echo "sisesta kogus<br>";
    }
}*/
