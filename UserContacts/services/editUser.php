<?php

if (!isset($_SESSION)) {
    session_start();
}

require_once __DIR__ . '/../classes/View.php';

if (!empty($_POST['edit_user_select'])) {
    $userFields = explode('&&&', $_POST['edit_user_select']);
    $view = new View();
    $view->assign('userFields', $userFields);
    $view->display(__DIR__ . '/../templates/editUser.php');
} else {
    ?>
    <script>
        alert('Данные о пользователе не переданы!');
        window.location.href = "/UserContacts/admin.php";
    </script> <?php
}