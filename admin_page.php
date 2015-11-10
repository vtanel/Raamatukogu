<!doctype html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <style>
        .navbar, ul, li {
            list-style-type: none;
            display: inline;
            float: left;
        }

        .navnupp {
            width: 120px;
            height: 40px;
            border: 1px solid;
            float: left;
            display: inline-block;
        }

        .log_out {
            float: right;
        }
    </style>

</head>

<body>

<h1>Tere " admin #1 "</h1>

<div class="navbar">
    <ul>
        <li><a href="insert_client.php">
                <div class="navnupp"><span>Kasutaja registeerimine</span></div>
            </a></li>

        <li><a href="insert_book.php">
                <div class="navnupp"><span>Sisesta raamat</span></div>
            </a></li>

        <li><a href="search_user.php">
                <div class="navnupp"><span>Otsi kasutajat</span></div>
            </a></li>

        <li><a href="search_book.php">
                <div class="navnupp"><span>Otsi raamatut</span></div>
            </a></li>

    </ul>

</div>

<a href="login.php">
    <div class="log_out">LOG OUT</div>
</a>

</body>
</html>
