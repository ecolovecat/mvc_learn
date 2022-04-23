<?php



if (isset($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = "";
}

switch ($action) {
    case "add":
        require_once ('view/member/add_user.php');
        require_once ('model/CRUD.php');

        $db = new CRUD();

        if (isset($_POST['add_user'])) {
            $result = $db->add();
            if ($result) {
                echo "success";
            }
        }
        break;

    case "edit":
        require_once ('view/member/edit_user.php');
        break;

    case "delete":
        require_once ('view/member/delete_user.php');
        break;
    default:
        require_once ('view/member/list.php');
        break;
}