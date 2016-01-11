<?php
if (isset($_POST['rented'])) {
    $found_books = mysqli_query($con, "
            SELECT book_title, genre_name, author_name, rent.book_id
            FROM books, genres, authors, rent
            WHERE books.book_id = rent.book_id");

    while ($book = MySQLi_fetch_array($found_books)) {

        echo '<tr>';
        echo '<td>' . $book['author_name'] . '</td>';
        echo '<td >' . $book['book_title'] . '</td>';
        echo '<td>' . $book['genre_name'] . '</td>';
        echo '</tr>';
    }

}