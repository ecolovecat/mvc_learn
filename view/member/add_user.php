<?php

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add User</title>
</head>
<body>
    <div class="register">
        <h3>Add User</h3>
        <form action="" method="post">
            <table>
                <tr>
                    <td>Name: </td>
                    <td><input type="text" name="name" placeholder="Name..."></td>
                </tr>
                <tr>
                    <td>Year of birth: </td>
                    <td><input type="number" name="year" placeholder="Year of birth..."></td>
                </tr>

                <tr>
                    <td>Address: </td>
                    <td><input type="text" name="address" placeholder="Address..."></td>
                </tr>

                <tr>
                    <td>&nbsp;</td>
                    <td><input type="submit" name="add_user" value="Add"></td>
                </tr>

            </table>

        </form>
    </div>
</body>
</html>
