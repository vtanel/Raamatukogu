<?php

//connect to database
require "../connect.php";

//insert book form data into database
if (isset($_POST['submit'])) {

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
            echo "sisesta tüüp<br>";
        }
        if (empty($_POST['quantity'])) {
            echo "sisesta kogus<br>";
        }
            elseif (!is_int($_POST['quantity'])) {
                echo "sisesta õige kogus<br>";
            }
    } else {
        // insert new book into database
        $sql = "INSERT INTO books (book_title, book_author, book_type, book_quantity)
        VALUES ('$_POST[title]', '$_POST[author]', '$_POST[type]', '$_POST[quantity]')";
            if (mysqli_query($con, $sql)) {
                echo "Raamat edukalt sisestatud";
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error(con);
            }
        }
}

// Close connection
mysqli_close($con);
