<?php
$book_id = isset($_GET['id']) ? $_GET['id'] : -1;
$q = mysqli_query($con, "
SELECT books.book_title, authors.author_name, genres.genre_name, books.book_quantiy
FROM books
JOIN authors ON books.author_id = authors.author_id
JOIN genres ON books.genre_id = genres.genre_id

WHERE books.book_id=$book_id




") or die(mysqli_error($con));
$raamat = mysqli_fetch_assoc($q);
