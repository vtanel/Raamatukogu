<?php
require "bootstrap.php";
session_start();
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $result = mysqli_query($db, "SELECT * FROM `admins` WHERE admin_username='$username' AND admin_password='$password'");
    if (mysqli_num_rows($result) == 1) {
        $_SESSION['username'] = $username;
        header("Location: admin_page.php");
    } else
        echo "Kasutajanimi või parool on vale.";
}
?>

<!doctype html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <title>Raamatukogu - sisselogimine</title>

    <style>

        #login {

            border: 2px solid;
            border-radius: 5px;
            min-width: 10px;
            max-width: 200px;

        }

    </style>

</head>
<body>

<div id='login'>
    <form method="post" accept-charset='UTF-8'>

        <table>

            <tr>
                <td>
                    <input placeholder='Kasutajanimi' type='text' name='username' id='username' maxlength="15"/>
                </td>
            </tr>

            <tr>
                <td>
                    <input placeholder='Parool' type='password' name='password' id='password' maxlength="15"/>
                    <br>
                </td>
            </tr>

            <tr>
                <td>
                    <input type='submit' name='submit' value='Logi sisse'/>
                </td>
            </tr>

        </table>
    </form>
</div>

</body>
</html>
