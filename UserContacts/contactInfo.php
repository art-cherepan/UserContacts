<?php

if (!isset($_SESSION)) {
    session_start();
}

require_once __DIR__ . '/classes/View.php';
require_once __DIR__ . '/classes/Models/Contacts.php';

if (isset($_GET['idContact'])) {
    $contacts = new Contacts();
    $contact = $contacts->getContact($_GET['idContact']);
    $view = new View();
    $view->assign('contact', $contact);
    $view->display(__DIR__ . '/templates/contactInfo.php');
} else {
    ?>
    <script>
        alert('Не передан идентификатор контакта');
        window.location.href = "/UserContacts/index.php";
    </script> <?php
}
