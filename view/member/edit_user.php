

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit User</title>
</head>
<body>
    <form action="" method="post">
        <table>
            <tr>
                <td>Name: </td>
                <td><input type="text" name="name" value="<?php echo $resul['name']?>"></td>
            </tr>
            <tr>
                <td>Year of birth: </td>
                <td><input type="number" name="year" value="<?php echo $resul['year']?>"></td>
            </tr>

            <tr>
                <td>Address: </td>
                <td><input type="text" name="address" value="<?php echo $resul['address']?>"></td>
            </tr>

            <tr>
                <td>&nbsp;</td>
                <td><input type="submit" name="edit_user" value="Edit"></td>
            </tr>

        </table>

    </form>
</body>
</html>
