<?php
//connect to database
$db = mysqli_connect("127.0.0.1", "root", "", "raamatukogu");

if ($db === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

//insert book form data into database
if (isset($_POST['insertbook'])) {

    //check if quantity is a number
    if (is_numeric($_POST['quantity'])) {
        settype($_POST['quantity'], 'integer');
    }

    //check if all fields have values
    if (empty($_POST['title']) or empty($_POST['author']) or
        empty($_POST['type']) or empty($_POST['quantity']) or !is_int($_POST['quantity'])
    ) {
        // show what values are missing
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
        if (empty($_POST['quantity'])) {
            echo "sisesta kogus<br>";
        } elseif (!is_int($_POST['quantity'])) {
            echo "sisesta �ige kogus<br>";
        }
    } else {
        // insert new book into database
        $sql = "INSERT INTO books (book_title, book_author, book_type, book_quantity)
        VALUES ('$_POST[title]', '$_POST[author]', '$_POST[type]', '$_POST[quantity]')";
        if (mysqli_query($db, $sql)) {
            echo "Raamat edukalt sisestatud";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($db);
        }
    }
}

// Close connection
mysqli_close($db);
