<?php

if (!isset($_SESSION)) {
    session_start();
}

require_once __DIR__ . '/../classes/View.php';

if (!empty($_POST['edit_contact_select'])) {
    $contactFields = explode('&&&', $_POST['edit_contact_select']);
    $view = new View();
    $view->assign('contactFields', $contactFields);
    $view->display(__DIR__ . '/../templates/editContact.php');
} else {
    ?>
    <script>
        alert('Данные о контакте не переданы!');
        window.location.href = "/UserContacts/admin.php";
    </script> <?php
}