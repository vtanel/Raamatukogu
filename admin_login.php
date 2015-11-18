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
        echo "Kasutajanimi voi parool on vale.";
}
?>

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
                    <input type='submit' name='login' value='Logi sisse'/>
                </td>
            </tr>

        </table>
    </form>
</div>