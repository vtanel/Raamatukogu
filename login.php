<?php
session_start();
if(isset($_POST['submit'])){
    require "connect.php";
    $username = $_POST['username'];
    $password = $_POST['password'];
    $result = mysqli_query($con, "SELECT * FROM `admins` WHERE username='$username' AND password='$password'");
    if (mysqli_num_rows($result)==1){
        $_SESSION['username'] = $username;
        header("Location: admin_page.php");
    }
    else
        echo "Kasutajanimi või parool on vale.";
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sisselogimine</title>

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
