<?php
    require_once ('model/CRUD.php');
    $db = new CRUD();
    $results = $db->retrieve();

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List</title>
</head>
<body>
    <table border="1px">
        <thead>
            <tr>
                <th>STT</th>
                <th>Name</th>
                <th>Year of birth</th>
                <th>Address</th>
                <th></th>
                <th></th>
            </tr>
        </thead>

        <tbody>

        <?php
            $stt = 1;
            foreach ($results as $result) {?>
                <tr>
                    <th><?php echo $stt ?></th>
                    <th><?php echo $result['name'] ?></th>
                    <th><?php echo $result['year'] ?></th>
                    <th><?php echo $result['address'] ?></th>
                    <th><a href='index.php?controller=user&action=edit&id=<?php echo $result['id']?>'>Edit</a></th>
                    <th><a href='index.php?controller=user&action=delete&id=<?php echo $result['id']?>'>Delete</a></th>

                </tr>
        <?php
        $stt++;
                }
        ?>

        </tbody>
    </table>
</body>
</html>