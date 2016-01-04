<?php
if (isset($_POST['submit'])) {
    $keyword = $_POST['search'];
    if ($keyword == "") {
        echo "Sisestage otsitav.";
    } else {
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
            echo '<td>' . $book['author_name'] . '</td>';
            echo '<td >' . $book['book_title'] . '</td>';
            echo '<td>' . $book['genre_name'] . '</td>';
            echo '<td>' . $book['book_quantiy'] . '</td>';
            echo '
<td>
<form method="post">
<input type="hidden" name="hidden" value="' . $book['book_id'] . '"/>
<input type="submit" value="Laenuta" name="rent" >
</form>
</td>
';
            echo '</tr>';

        }
    }
}

if (isset($_POST['rent'])) {
    $vastavid = $_POST['hidden'];
    mysqli_query($con, "
UPDATE books
 SET books.book_quantiy = books.book_quantiy-1
 WHERE book_id=$vastavid
");
    $muutuja = "INSERT INTO rent (client_id, book_id, rent_start_date, rent_end_date)
VALUES ($client_id, $vastavid, NOW(), NOW()+INTERVAL 14 DAY)";
    mysqli_query($con, $muutuja);
}