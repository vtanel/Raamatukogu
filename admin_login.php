<?php
session_start();
if (isset($_POST['login'])) {
    require "connect.php";
    $username = $_POST['username'];
    $password = $_POST['password'];
    $result = mysqli_query($con, "SELECT * FROM `admins` WHERE admin_username='$username' AND admin_password='$password'");
    if (mysqli_num_rows($result) == 1) {
        $_SESSION['username'] = $username;
        header("Location: index.php");
    } else
        $message = "Kasutajanimi. või parool on vale.";
    echo "<script type='text/javascript'>alert('$message');</script>";

}
?>

<!doctype html>
<html lang="et">
<head>

    <meta charset="UTF-8">
    <title>Logi Sisse</title>
    <link href="css/admin_login.css" rel="stylesheet" type="text/css">
</head>

<body>
<div id='login'>
    <form method="post" accept-charset='UTF-8'>

        <table id="login_table">

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
                    <input class='login_btn' type='submit' name='login' value='Logi sisse'/>
                </td>
            </tr>

        </table>
    </form>
</div>
</body>
</html>