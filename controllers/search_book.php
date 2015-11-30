<?php


if (isset($_POST['submit'])) {
    $keyword = $_POST['search'];
    if($keyword==""){
        echo "Sisestage otsitav.";
    }else {
        $found_books = mysqli_query($con, "
            SELECT books.book_id, books.book_title,books.book_quantiy,authors.author_name,genres.genre_name
            FROM books
            JOIN authors ON authors.author_id  = books.author_id
            JOIN genres ON books.genre_id = genres.genre_id
            WHERE
              books.book_title LIKE ('%$keyword%')OR
              authors.author_name LIKE ('%$keyword%')OR
              genres.genre_id LIKE ('%$keyword%')
            ");

        while ($book = MySQLi_fetch_array($found_books)) {

            echo '<tr>';
            echo '<td id="id">' . $book['book_id'] . '</td>';
            echo '<td ><a href="?page=book&id=' . $book['book_id'] . '"> ' . $book['book_title'] . '</a></td>';
            echo '<td id="author">' . $book['author_name'] . '</td>';
            echo '<td id="type">' . $book['genre_name'] . '</td>';
            echo '<td id="quantity">' . $book['book_quantiy'] . '</td>';
            echo '</tr>';

        }
    }
}

