<?php
$book_id = isset($_GET['id']) ? $_GET['id'] : -1;
$q = mysqli_query($con,
    "SELECT books.book_title, authors.author_name, genres.genre_name, books.book_quantiy
    FROM books
    JOIN authors ON books.author_id = authors.author_id
    JOIN genres ON books.genre_id = genres.genre_id

    WHERE books.book_id=$book_id")
or die(mysqli_error($con));
$raamat = mysqli_fetch_assoc($q);


if (isset($_POST['changebook'])) {
    $author_name = $_POST['author_name'];
    $genre = $_POST['genre'];
    $book_title = $_POST['book_title'];
    $book_quantiy = $_POST['book_quantiy'];

    $q = mysqli_query($con,
        "UPDATE books, authors, genres
        SET book_title = '$book_title',
        book_quantiy = '$book_quantiy',
        authors.author_name = '$author_name',
        genres.genre_name = '$genre'
        WHERE authors.author_id=books.author_id AND genres.genre_id=books.genre_id AND book_id = '$book_id' ");

    if ($q) {
        echo "Andmed muudetud";
        $q = mysqli_query($con,
            "SELECT books.book_title, authors.author_name, genres.genre_name, books.book_quantiy
    FROM books
    JOIN authors ON books.author_id = authors.author_id
    JOIN genres ON books.genre_id = genres.genre_id

    WHERE books.book_id=$book_id")
        or die(mysqli_error($con));
        $raamat = mysqli_fetch_assoc($q);
    } else {
        echo "Andmete muutmisel tekkis viga";
    }

}
