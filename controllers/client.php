<?php
$client_id = isset($_GET['id']) ? $_GET['id'] : -1;
$q = mysqli_query($con, "
SELECT clients.client_id, clients.fname, clients.lname, clients.pcode, clients.phone, clients.email,
       rent.rent_start_date, rent.rent_end_date, rent.rent_return_date,
       books.book_title, authors.author_name,
       SUM(IF(rent_return_date > 0, 0, 1 )) AS current_rent_count,
       COUNT(rent.rent_id) AS total_rent_count
FROM clients
JOIN rent USING (client_id)
JOIN books ON rent.book_id = books.book_id
JOIN authors ON books.author_id = authors.author_id

WHERE clients.client_id=$client_id

") or die(mysqli_error($con));
$isik = mysqli_fetch_assoc($q);

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
            echo '<td id="id">' . $book['author_name'] . '</td>';
            echo '<td >' . $book['book_title'] . '</td>';
            echo '<td id="author">' . $book['genre_name'] . '</td>';
            echo '<td><input type="submit" name="rent" value="Laenuta"/></td>';
            echo '</tr>';

        }
    }
}

if (isset($_POST['rent'])) {

}