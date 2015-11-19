<?php

if (isset($_POST['submit'])) {

    $keyword = $_POST['search'];
    $found_books = mysqli_query($db, "
            SELECT * FROM books
            WHERE book_ID LIKE('%$keyword%') OR
            book_title LIKE('%$keyword%') OR
            book_author LIKE ('%$keyword%') OR
            book_type LIKE('%$keyword%') OR
            book_quantity LIKE ('%$keyword%')
            ");

    while ($book = MySQLi_fetch_array($found_books)) {

        echo '<tr>';
        echo '<td id="id">' . $book['book_ID'] . '</td>';
        echo '<td id="title">' . $book['book_title'] . '</td>';
        echo '<td id="author">' . $book['book_author'] . '</td>';
        echo '<td id="type">' . $book['book_type'] . '</td>';
        echo '<td id="quantity">' . $book['book_quantity'] . '</td>';
        echo '</tr>';

    }
}
