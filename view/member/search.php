<?php
    require_once __DIR__.'/../../model/CRUD.php';
    $db = new CRUD();
    $results = $db->search($_GET['key']);



?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

        <table border="1px">
            <thead>
                <tr>
                    <td>STT</td>
                    <td>Name</td>
                    <td>Year</td>
                    <td>Address</td>
                </tr>
            </thead>
            <tbody>
    <?php
        $stt = 1;
        foreach ($results as $result) {
    ?>

                <tr>
                    <th><?php echo $stt ?></th>
                    <th><?php echo $result['name'] ?></th>
                    <th><?php echo $result['year'] ?></th>
                    <th><?php echo $result['address'] ?></th>
                </tr>

    <?php
    $stt++;
        }

    ?>
            </tbody>
        </table>
</body>
</html>