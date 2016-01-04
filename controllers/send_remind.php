<?php
require '../config.php';
require_once '../connect.php';

$con->begin_transaction();

$flag = 'true';

//select rents that have gone over due date and where reminders have not been sent within 1 week.
$over_due_date_query = "SELECT *
FROM rent
INNER JOIN clients ON clients.client_id = rent.client_id
INNER JOIN books ON rent.book_id = books.book_id
WHERE rent_end_date < NOW()
AND DATE_ADD(last_reminder, INTERVAL 1 WEEK) < NOW()";

if (!mysqli_query($con, $over_due_date_query)) {
    echo "Error: " . $over_due_date_query . "<br>" . mysqli_error($con);
    $flag = 'false';
}
$new_reminders = mysqli_query($con, $over_due_date_query);

while ($new_reminder = mysqli_fetch_assoc($new_reminders)) {
    $rent_id = ($new_reminder['rent_id']);
    $email = $new_reminder['email'];
    $fname = $new_reminder['fname'];
    $lname = $new_reminder['lname'];
    $book = $new_reminder['book_title'];

    //Send email
    require_once "Mail.php";
    $from = '<raamatukoguvs15@gmail.com>';
    $to = '<' . $email . '>';
    $subject = 'Raamatukogu tagastus tähtaeg' . $fname . ' ' . $lname . '!';
    $body =
        'Lugupeetud ' . $fname . ' ' . $lname . '

Teie laenatud raamatu ("' . $book . '") tagasi toomise tähtaeg on möödas, helistage 555 555 55 või saatke email aadressile " raamatukogu@raamatukogu.ee " et pikendada tähtaega ühe nädala võrra.

Lugupidamisega
Raamatukogu OÜ';

    $headers = array(
        'From' => $from,
        'To' => $to,
        'Subject' => $subject
    );

    $smtp = Mail::factory('smtp', array(
        'host' => 'ssl://smtp.gmail.com',
        'port' => '465',
        'auth' => true,
        'username' => 'raamatukoguvs15@gmail.com',
        'password' => 'Veebispetsialist'
    ));

    //update last sent reminder value
    $sent_reminder_update = "UPDATE rent SET last_reminder=NOW() WHERE rent_id = $rent_id";

    mysqli_query($con, $sent_reminder_update);
    if (!mysqli_query($con, $sent_reminder_update)) {
        echo "Error: " . $sent_reminder_update . "<br>" . mysqli_error($con);
        $flag = 'false';
    }


    //Check if all data has been correctly managed
    if ($flag === 'false') {
        echo "Database error. Message not sent.";
        $con->rollback();
    } else {

        //send mail
        $mail = $smtp->send($to, $headers, $body);

        //check if mail was sent
        if (PEAR::isError($mail)) {
            echo('<p>' . $mail->getMessage() . '</p>');
            $con->rollback();
        } else {
            echo('<p>Message successfully sent!</p>');
            $con->commit();
        }
    }
}






