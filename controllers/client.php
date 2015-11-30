<?php
$client_id = isset($_GET['id']) ? $_GET['id'] : -1;
$q=mysqli_query($con,"
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




") or die( mysqli_error($con));
$isik = mysqli_fetch_assoc($q);