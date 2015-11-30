<?php
//insert client form data into database
if (isset($_POST['insertuser'])) {
    //check if all fields have values
    if (empty($_POST['fname']) or empty($_POST['lname']) or
        empty($_POST['pcode']) or is_int($_POST['pcode']) or
        preg_match('/^\d{11}$/', ($_POST['pcode'])) === 0 or
        empty($_POST['phone']) or is_int($_POST['phone']) or
        empty($_POST['email'])
    ) {
        // show what values are missing
        echo "Klienti ei saanud sisestada. <br><br>Vead:<br> ";
        if (empty($_POST['fname'])) {
            echo "sisesta eesnimi<br>";
        }
        if (empty($_POST['lname'])) {
            echo "sisesta perekonnanimi<br>";
        }
        if (empty($_POST['pcode'])) {
            echo "sisesta isikukood<br>";
        } elseif (is_int($_POST['pcode'])) {
            echo "sisesta õige isikukood<br>";
        } elseif (!preg_match('/^\d{11}$/', ($_POST['pcode']))) {
            echo "sisesta õige isikukoodi pikkus<br>";
        }
        if (empty($_POST['phone'])) {
            echo "sisesta mobiil<br>";
        } elseif (is_int($_POST['phone'])) {
            echo "sisesta õige mobiil<br>";
        }
        if (empty($_POST['email'])) {
            echo "sisesta email<br>";
        }

    } else {
        // insert new client into database
        $sql = "INSERT INTO clients (fname, lname, pcode, phone, email)
        VALUES
        ('$_POST[fname]',
         '$_POST[lname]',
         '$_POST[pcode]',
         '$_POST[phone]',
         '$_POST[email]')
         ";

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
        echo "sisesta t��p<br>";
    }
    if (empty($_POST['quantity']) or !is_int($_POST['quantity'])) {
        echo "sisesta kogus<br>";
    }
}*/
