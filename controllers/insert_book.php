<?php
//insert book form data into database
if (isset($_POST['insertbook'])) {

    //check if quantity is a number
    if (is_numeric($_POST['quantity'])) {
        settype($_POST['quantity'], 'integer');
    }

    //check if all fields have values
    if (empty($_POST['title']) or empty($_POST['author']) or
        empty($_POST['genre']) or empty($_POST['quantity']) or !is_int($_POST['quantity'])
    ) {
        // show what values are missing
        echo "Raamatut ei saanud sisestada. <br><br>Vead:<br> ";
        if (empty($_POST['title'])) {
            echo "sisesta pealkiri<br>";
        }
        if (empty($_POST['author'])) {
            echo "sisesta autor<br>";
        }
        if (empty($_POST['genre'])) {
            echo "sisesta tüüp<br>";
        }
        if (empty($_POST['quantity'])) {
            echo "sisesta kogus<br>";
        } elseif (!is_int($_POST['quantity'])) {
            echo "sisesta õige kogus<br>";
        }
    } else {
        // insert new book into database

        $con->begin_transaction();
        $flag = 'true';

        //TITLE
        //check if title already exists
        if (mysqli_num_rows(mysqli_query($con, "SELECT book_title FROM books WHERE book_title = '$_POST[title]'")) > 0) {
            echo "VIGA: Sama nimeline raamat on juba andmebaasis.<br>";
            $flag = 'false';

        } else {
            $title_query = "INSERT INTO books (book_title) VALUE ('$_POST[title]')";
            if (!mysqli_query($con, $title_query)) {
                echo "Error: " . $title_query . "<br>" . mysqli_error($con);
                $flag = 'false';
            }
        }

        //QUANTITY
        $quantity_query = "UPDATE books SET book_quantiy = '$_POST[quantity]' WHERE book_title = '$_POST[title]'";
        if (!mysqli_query($con, $quantity_query)) {
            echo "Error: " . $quantity_query . "<br>" . mysqli_error($con);
            $flag = 'false';
        }

        //AUTHOR
        //check if author already exists
        if (mysqli_num_rows(mysqli_query($con, "SELECT author_name FROM authors WHERE author_name = '$_POST[author]'")) > 0) {

            //if exists
            //select inserted authors id from authors table
            $author_id_query = "SELECT author_id FROM authors WHERE author_name = '$_POST[author]'";
            $author_id = mysqli_fetch_array(mysqli_query($con, $author_id_query));
            if (!mysqli_query($con, $author_id_query)) {
                echo "Error: " . $author_id_query . "<br>" . mysqli_error($con);
                $flag = 'false';
            }

            //update books table with correct author_id
            $books_author_id_update = "UPDATE books SET author_id = $author_id[author_id] WHERE book_title = '$_POST[title]'";
            if (!mysqli_query($con, $books_author_id_update)) {
                echo "Error: " . $books_author_id_update . "<br>" . mysqli_error($con);
                $flag = 'false';
            }
        } else {

            //if doesn't exist
            //insert new author name
            $authors_author_name_query = "INSERT INTO authors (author_name) VALUE ('$_POST[author]')";
            if (!mysqli_query($con, $authors_author_name_query)) {
                echo "Error: " . $authors_author_name_query . "<br>" . mysqli_error($con);
                $flag = 'false';
            }

            //select new generated author_id from authors table
            $authors_author_id_query = "SELECT author_id FROM authors WHERE author_name = '$_POST[author]'";
            $authors_author_id = mysqli_fetch_array(mysqli_query($con, $authors_author_id_query));
            if (!mysqli_query($con, $authors_author_id_query)) {
                echo "Error: " . $authors_author_id_query . "<br>" . mysqli_error($con);
                $flag = 'false';
            }

            //update author_id in books table
            $books_author_id_query = "UPDATE books SET author_id = $authors_author_id[author_id] WHERE book_title = '$_POST[title]'";
            if (!mysqli_query($con, $books_author_id_query)) {
                echo "Error: " . $books_author_id_query . "<br>" . mysqli_error($con);
                $flag = 'false';
            }
        }

        //GENRE
        //check if genre already exists
        if (mysqli_num_rows(mysqli_query($con, "SELECT genre_name FROM genres WHERE genre_name = '$_POST[genre]'")) > 0) {

            //if exists
            //select inserted genres id from genres table
            $genre_id_query = "SELECT genre_id FROM genres WHERE genre_name = '$_POST[genre]'";
            $genre_id = mysqli_fetch_array(mysqli_query($con, $genre_id_query));
            if (!mysqli_query($con, $genre_id_query)) {
                echo "Error: " . $genre_id_query . "<br>" . mysqli_error($con);
                $flag = 'false';
            }

            //update books table with correct genre_id
            $g_id = "UPDATE books SET genre_id = $genre_id[genre_id] WHERE book_title = '$_POST[title]'";
            if (!mysqli_query($con, $g_id)) {
                echo "Error: " . $g_id . "<br>" . mysqli_error($con);
                $flag = 'false';
            }

        } else {
            // if doesn't exist
            //insert new genre into genres table
            $genre = "INSERT INTO genres (genre_name) VALUE ('$_POST[genre]')";
            if (!mysqli_query($con, $genre)) {
                echo "Error: " . $genre . "<br>" . mysqli_error($con);
                $flag = 'false';
            }

            //select new generated genre_id from genres table
            $genres_genre_id_query = "SELECT genre_id FROM genres WHERE genre_name = '$_POST[genre]'";
            $genres_genre_id = mysqli_fetch_array(mysqli_query($con, $genres_genre_id_query));
            if (!mysqli_query($con, $genres_genre_id_query)) {
                echo "Error: " . $genres_genre_id_query . "<br>" . mysqli_error($con);
                $flag = 'false';
            }

            //update genre_id in books table
            $books_genre_id_query = "UPDATE books SET genre_id = $genres_genre_id[genre_id] WHERE book_title = '$_POST[title]'";
            if (!mysqli_query($con, $books_genre_id_query)) {
                echo "Error: " . $books_genre_id_query . "<br>" . mysqli_error($con);
                $flag = 'false';
            }

        }

        if ($flag === 'true') {
            $con->commit();
            echo 'Raamat edukalt sisestatud.';
        } else {
            $con->rollback();
            echo "Raamatut ei saanud sisestada.";
        }
    }
}
// Close connection
mysqli_close($con);
