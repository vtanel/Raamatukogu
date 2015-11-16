<?php
session_start();

require 'controllers/admins.php';

?>

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

<h1>Tere <?= $name['admin_fname']?> <?= $name['admin_lname']?></h1>

<div class="navbar">
    <ul>
        <li><a href="insert_client.php">
                <div class="navnupp"><span>Kasutaja registeerimine</span></div>
            </a></li>

        <br>

        <li><a href="insert_book.php">
                <div class="navnupp"><span>Sisesta raamat</span></div>
            </a></li>

        <br>

        <li><a href="search_user.php">
                <div class="navnupp"><span>Otsi kasutajat</span></div>
            </a></li>

        <br>

        <li><a href="search_book.php">
                <div class="navnupp"><span>Otsi raamatut</span></div>
            </a></li>

        <br>

    </ul>

</div>

<!--  Calendar -->
<?php
$day_num = date("j"); //If today is September 29, $day_num=29
$month_num = date("m"); //If today is September 29, $month_num=9
$year = date("Y"); //4-digit year
$date_today = getdate(mktime(0, 0, 0, $month_num, 1, $year)); //Returns array of date info for 1st day of this month
$month_name = $date_today["month"]; //Example: "September" - to label the Calendar
$first_week_day = $date_today["wday"]; //"wday" is 0-6, 0 being Sunday. This is for day 1 of this month

$cont = true;
$today = 27; //The last day of the month must be >27, so start here
while (($today <= 32) && ($cont)) //At 32, we have to be rolling over to the next month
{
//Iterate through, incrementing $today
//Get the date information for the (hypothetical) date $month_num/$today/$year
    $date_today = getdate(mktime(0, 0, 0, $month_num, $today, $year));
//Once $date_today's month ($date_today["mon"]) rolls over to the next month, we've found the $lastday
    if ($date_today["mon"] != $month_num) {
        $lastday = $today - 1; //If we just rolled over to the next month, need to subtract 1 to get our $lastday
        $cont = false; //This kicks us out of the while loop
    }
    $today++;
}
?>

<table cellspacing=0 cellpadding=5 frame='all' rules='all' style='border:#808080 1px solid;'>
    <caption> <?php echo $month_name ?></caption>
    <tr align=left>
        <th>P</th>
        <th>E</th>
        <th>T</th>
        <th>K</th>
        <th>N</th>
        <th>R</th>
        <th>L</th>
    </tr>

    <?php
    $day = 1; //This variable will track the day of the month
    $wday = $first_week_day; //This variable will track the day of the week (0-6, with Sunday being 0)
    $firstweek = true; //Initialize $firstweek variable so we can deal with it first
    while ($day <= $lastday) //Iterate through all days of the month
    {
        if ($firstweek) //Special case - first week (remember we initialized $first_week_day above)
        {
            echo "<tr align=left>";
            for ($i = 1; $i <= $first_week_day; $i++) {
                echo "<td> </td>"; //Put a blank cell for each day until you hit $first_week_day
            }
            $firstweek = false; //Great, we're done with the blank cells
        }
        if ($wday == 0) //Start a new row every Sunday
            echo "<tr align=left>";

        echo "<td";
        if ($day == $day_num) echo " bgcolor='yellow'"; //highlight TODAY in yellow
        echo ">$day</td>";
        if ($wday == 6)
            echo "</tr>"; //If today is Saturday, close this row

        $wday++; //Increment $wday
        $wday = $wday % 7; //Make sure $wday stays between 0 and 6 (so when $wday++ == 7, this will take it back to 0)
        $day++; //Increment $day
    }

    while ($wday <= 6) //Until we get through Saturday
    {
        echo "<td> </td>"; //Output an empty cell
        $wday++;
    }
    echo "</tr></table>";
    ?>

    <!-- Calendar end -->

    <a href="login.php">
        <div class="log_out">Logi välja</div>
    </a>

</body>
</html>
