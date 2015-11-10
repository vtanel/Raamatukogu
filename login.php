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

<div id='login' action='login.php' method='post' accept-charset='UTF-8'>

    <table >

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
                <input type='submit' name='Submit' value='Logi sisse'/>
            </td>
        </tr>

    </table>

</div>

</body>
</html>
