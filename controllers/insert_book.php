<?php
//insert book form data into database
if (isset($_POST['insertbook'])) {

    //check if quantity is a number
    if (is_numeric($_POST['quantiy'])) {
        settype($_POST['quantiy'], 'integer');
    }

    //check if all fields have values
    if (empty($_POST['title']) or empty($_POST['author']) or
        empty($_POST['type']) or empty($_POST['quantiy']) or !is_int($_POST['quantiy'])
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
        if (empty($_POST['quantiy'])) {
            echo "sisesta kogus<br>";
        } elseif (!is_int($_POST['quantiy'])) {
            echo "sisesta õige kogus<br>";
        }
    } else {
        // insert new book into database
































        $sql =
        "
        INSERT INTO books (book_title, author_id, genre_id, book_quantiy)
        VALUES (
        '$_POST[title]',
        SELECT ,
        '$_POST[genre]',
        '$_POST[quantiy]')"

        ;
        if (mysqli_query($con, $sql)) {
            echo "Raamat edukalt sisestatud";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($con);
        }
    }
}

// Close connection
mysqli_close($con);
